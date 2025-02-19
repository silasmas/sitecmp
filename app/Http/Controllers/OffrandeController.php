<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\User;
use App\Models\Offrande;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Services\FlexPayService;
use App\Http\Requests\StoreOffrandeRequest;
use App\Http\Requests\UpdateOffrandeRequest;
use Illuminate\Support\Facades\Log;

class OffrandeController extends Controller
{
    protected $flexPayService;

    public function __construct(FlexPayService $flexPayService)
    {
        $this->flexPayService = $flexPayService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function paieOffrande(Request $request)
    {
        //  dd($request);

        // $request->validate([
        //     'montant' => 'required|numeric',
        //     'toggleOption' => 'required|in:mobile_money,card',
        //     'number' => 'required_if:payment_method,mobile_money',
        // ]);

        $ref = generateUniqueReference();

        if ($request->toggleOption === "mobile") {

            $datas = [
                'type' => $request->toggleOption == 'mobile' ? 1 : 2,
                'phone' => $request->number,
                'montant' => $request->montant,
                'chanel' => $request->toggleOption,
                'offrande_id' => $request->offrande_id,
                'currency' => $request->monaie,
                'reference' => $ref,
                'fullname' => $request->fullname,
                'numberPhone' => $request->phoneNumber,
                'pays' => $request->country,
            ];
            $init = Transaction::create($datas);

            if ($init) {

                // Create response by sending request to FlexPay
                return $this->initiatePayment($init, $init->phone);
            } else {
                return response()->json(
                    [
                        'reponse' => false,
                        'msg' => 'Erreur initialisation!'
                    ]
                );
            }
        }
    }


    public function initiatePayment(Transaction $order, $phone)
    {

        $data = [];
        if ($order->chanel === 'mobile') {

            $data = [
                "merchant" => env("FLEXPAY_MARCHAND"),
                "type" => $order->chanel === 'mobile' ? "1" : "2",
                "phone" => $phone,
                "reference" => $order->reference,
                "amount" => $order->montant,
                "currency" => $order->currency,
                "callbackUrl" => env('APP_URL') . '/paymentcallback',
            ];

            $rep = initRequeteFlexPay("mobile", $data, $order);
            // dd($rep);
            return response()->json($rep);
        } else {

            $retour = $this->flexPayService->initiatePayment($order->total, $order->currency, $order->reference, "Achat de produits");
            //    dd($retour["rep"]);
            if ($retour['rep']) {
                $order->update([
                    'provider_reference' => $retour['orderNumber'],
                    'etat' => 'En cours'
                ]);
                return response()->json(["reponse" => $retour['rep'], "redirect_url" => $retour['url']], 200);
            } else {
                return response()->json(["reponse" => $retour['rep'], "message" => $retour['message']], 400);
            }
        }
        return response()->json(["error" => "Échec de la transaction"], 400);
    }

    public function paymentCallback(Request $request)
    {
     // Enregistrement des données reçues dans les logs
     Log::info('Callback reçu:', $request->all());
        // Récupération de la commande avec la référence envoyée
        $commande = Transaction::where('reference', $request->reference)->first();

        if ($commande) {
            if ($request->code == 0) {
                // Transaction réussie
                $commande->etat = 'Réussi';
                $commande->amount_customer =  $request->amountCustomer;
                $commande->provider_reference = $request->orderNumber;
                $commande->updated_at = now();
            } else {
                // Transaction échouée
                $commande->etat = 'échec';
            }

            Log::info('Callback reçu:', 'Callback traité avec comme status '.$ $commande->etat);
            $commande->save();
        }
        return response()->json(['message' => 'Callback traité avec comme status '.$ $commande->etat]);
    }

    public function checkTransactionStatus(Request $request)
    {
        Log::info('Check reçu:', $request->all());
        $reference = $request->input('reference');
        // dump($reference);
        // Construire l'URL avec le paramètre de requête
        $url = 'https://backend.flexpay.cd/api/rest/v1/check/' . urlencode($reference);
        // $url = env("FLEXPAY_GATEWAY_CHECK") ."/". urlencode($reference);

        $curl = curl_init($url);

        // Définir les options de cURL pour GET
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . env('FLEXPAY_API_TOKEN'),
        ]);

        // Exécuter la requête
        $curlResponse = curl_exec($curl);

        // Gérer les erreurs de cURL
        if (curl_errno($curl)) {
            $errorMessage = curl_error($curl);
            return response()->json(['error' => 'Erreur de connexion au service FlexPay'], 500);
        }

        curl_close($curl);

        // Valider et traiter la réponse JSON
        $jsonRes = json_decode($curlResponse, true);

        //   dd($jsonRes );
        // // Journaliser la réponse pour le débogage

        $transactionData = $jsonRes['transaction'];
        $transaction = Transaction::where('reference', $transactionData['reference'])->first();
        //  dump($transactionData["status"]);
        Log::info('Check reçu:', $transactionData);
        switch ($jsonRes['transaction']["status"]) {
            case 0:
                // Trouver la transaction correspondante
                if ($transaction) {
                    $status = 'Réussi';
                    // Mettre à jour l'état des données
                    $transaction->update([
                        'etat' => $status,
                        'amount_customer' => $transactionData['amountCustomer'],
                        'phone' => $transactionData['channel'],
                        'updated_at' => now()
                    ]);
                    $this->clearCartAfterPayment($transaction->user_id);
                    return response()->json([
                        'reponse' => true,
                        'message' => 'La transaction mis à été fait avec succès.',
                        'status' => $jsonRes['transaction']["status"],
                    ]);
                }
                break;
            case 1:
                $status = 'Annulée';
                $transaction->update([
                    'etat' => $status,
                    'updated_at' => now()
                ]);
                return response()->json([
                    'reponse' => false,
                    'status' => $jsonRes['transaction']["status"],
                    'message' => $jsonRes["message"],
                ]);
                break;
            case 2:
                $status = 'En attente';
                $transaction->update([
                    'etat' => $status,
                    'updated_at' => now()
                ]);

                return response()->json([
                    'reponse' => true,
                    'message' => $jsonRes["message"],
                    'orderNumber' => $transaction->provider_reference,
                    'status' => $jsonRes['transaction']["status"],
                    'url' => "attente",
                ]);
                break;
            default:
                return response()->json([
                    'reponse' => false,
                    'status' => $jsonRes['transaction']["status"],
                    'message' => $jsonRes["message"],
                ]);
                break;
        }

        // dd($jsonRes["transaction"]);
    }

    public function paid($reference, $amount, $currency, $status)
    {
        // Vérifier si la commande existe
        $order = Commande::where('reference', $reference)->first();
        $msg = "";
        if (!$order) {
            return response()->json(['error' => 'Commande non trouvée'], 404);
        }

        // Mettre à jour le statut en fonction de la réponse de FlexPay
        switch ($status) {
            case 'success':
                $order->etat = 'Payée'; // Paiement réussi
                $msg = 'Paiement réussi !';
                $rep = $this->clearCartAfterPayment($order->user_id);
                break;

            case 'cancel':
                $order->etat = 'Annulée'; // Paiement annulé par l'utilisateur
                $msg = 'Paiement annulé !';
                break;

            case 'decline':
                $order->etat = 'Annulée'; // Paiement refusé
                $msg = 'Paiement refusé !';
                break;

            default:
                return response()->json(['error' => 'Statut inconnu'], 400);
        }

        // Enregistrer les modifications
        $order->save();
        return redirect()->route('commandeStatus')->with([
            'order_details' => [
                'message' => $msg,
                'order_reference' => $reference,
                'amount' => $amount,
                'currency' => $currency,
                'status' => $order->etat,
                'order' => $order->provider_reference,
                'channel' => $order->channel
            ]
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = [
            'timestamp' => now(),
            'reference' => $request->input('reference'),
            'status' => $request->input('status'),
        ];
        $data = $request->all();


        $payment = Transaction::where('reference', operator: $request->reference)->first();

        // If payment exists
        if ($payment != null) {
            $contre = contreventionUser::where('reference', $request->reference)->first();

            $contre->update([
                'etat' => $request->code === 0 ? '1' : '0',
                'updated_at' => now()
            ]);
            $payment->update([
                'reference' => $request->reference,
                'provider_reference' => $request->provider_reference,
                'order_number' => $request->order_number,
                'amount' => $request->amount,
                'amount_customer' => $request->amountCustomer,
                'phone' => $request->phone,
                'currency' => $request->currency,
                'chanel' => $request->channel,
                'type_id' => $request->type,
                'etat' => $request->code,
                'updated_at' => now()
            ]);
            return response()->json(
                [
                    'reponse' => true,
                    'msg' => 'Le paiement effectué'
                ]
            );
        } else {
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Offrande $offrande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offrande $offrande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOffrandeRequest $request, Offrande $offrande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offrande $offrande)
    {
        //
    }
}
