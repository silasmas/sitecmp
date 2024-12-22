<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\User;
use App\Models\Offrande;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOffrandeRequest;
use App\Http\Requests\UpdateOffrandeRequest;

class OffrandeController extends Controller
{
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
        // dd($request);
        $ref = 'CMP-' . ((string) random_int(10000000, 99999999));
        $inputs = [
            'transaction_type_id' => $request->toggleOption == 'mobile' ? 1 : 2,
            'amount' => $request->montant,
            'currency' => $request->monaie,
            'reference' => $ref,
            'other_phone' => $request->number,
            'app_url' => env("FLEXPAY_GATEWAY_CARD"),
        ];
        if ($request->toggleOption === "mobile") {

            $datas = [
                'type' => $request->toggleOption == 'mobile' ? 1 : 2,
                // 'provider_reference' => $request->montant,
                'phone' => $request->number,
                'chanel' => $request->toggleOption,
                // 'description' => $request->montant,
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
                $data = array(
                    'merchant' => env("FLEXPAY_MARCHAND"),
                    'type' => $inputs["transaction_type_id"],
                    'phone' => $inputs["other_phone"],
                    'reference' => $inputs["reference"],
                    'amount' => $inputs['amount'],
                    'currency' => $inputs['currency'],
                    'callbackUrl' => env('APP_URL') . 'storeTransaction',
                );
                $data = json_encode($data);
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, env("FLEXPAY_GATEWAY_MOBILE"));
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . env('FLEXPAY_API_TOKEN')
                ));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);

                $response = curl_exec($ch);

                if (curl_errno($ch)) {
                    return response()->json(
                        [
                            'reponse' => false,
                            'msg' => 'Une erreur lors du traitement de votre requête'
                        ]
                    );
                } else {
                    curl_close($ch);

                    $jsonRes = json_decode($response);
                    $code = $jsonRes->code; // Push sending status
                    if ($code != '0') {
                        return response()->json(
                            [
                                'reponse' => false,
                                'msg' => 'Impossible de traiter la demande, veuillez réessayer echec envoie du push'
                            ]
                        );
                    } else {
                        $object = new stdClass();

                        $object->result_response = [
                            'message' => $jsonRes->message,
                            'order_number' => $jsonRes->orderNumber
                        ];
                        Log::info('retour info détails : ',   $object->result_response);
                        // $contre = contreventionUser::where('reference', $inputs["reference"])->first();
                        // // // The donation is registered only if the processing succeed
                        // $contre->update(['etat' => '1']);

                        // // Register payment, even if FlexPay will
                        $payment = transaction::where([['order_number', $jsonRes->orderNumber], ['reference', $inputs["reference"]]])->first();

                        if (is_null($payment)) {
                            transaction::updateOrCreate(
                                ['reference' => $inputs["reference"]],
                                [
                                    'order_number' => $jsonRes->orderNumber,
                                    'amount' => $inputs['amount'],
                                    'phone' => $inputs['other_phone'],
                                    'currency' => $inputs['currency'],
                                    'type_id' => $inputs["transaction_type_id"],
                                ]
                            );
                            return response()->json(
                                [
                                    'reponse' => true,
                                    'msg' => 'Veuillez validé votre paiement sur votre téléphone!',
                                    'type' => "mobile",
                                    'reference' => $inputs["reference"],
                                    'orderNumber' => $jsonRes->orderNumber
                                ]
                            );
                        }
                    }
                }
            } else {
                return response()->json(
                    [
                        'reponse' => false,
                        'msg' => 'Erreur initialisation!'
                    ]
                );
            }
        } else {
            $body = json_encode(array(
                'authorization' => "Bearer " . env('FLEXPAY_API_TOKEN'),
                'merchant' => env('FLEXPAY_MARCHAND'),
                'reference' => $inputs['reference'],
                'amount' => $inputs['amount'],
                'currency' => $inputs['currency'],
                'description' => "Paiemen d'une contrevention",
                'callback_url' => env('APP_URL') . 'storeTransaction',
                'approve_url' =>  env('APP_URL') . 'paid/' . $inputs['reference'] . '/' . $inputs['amount'] . '/' . $inputs['currency'] . '/0',
                'cancel_url' =>  env('APP_URL') . 'paid/' . $inputs['reference'] . '/' . $inputs['amount'] . '/' . $inputs['currency'] . '/1',
                'decline_url' =>  env('APP_URL') . 'paid/' . $inputs['reference'] . '/' . $inputs['amount'] . '/' . $inputs['currency'] . '/2',
                'home_url' =>  env('APP_URL') . 'home',
            ));

            $curl = curl_init(env('FLEXPAY_GATEWAY_CARD'));

            curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $curlResponse = curl_exec($curl);


            $jsonRes = json_decode($curlResponse, true);
            $code = $jsonRes['code'];
            $message = $jsonRes['message'];

            if (!empty($jsonRes['error'])) {
                return response()->json(
                    [
                        'reponse' => false,
                        'msg' => $jsonRes['message'],
                        'type' => "carte",
                        'data' => $jsonRes['error']
                    ]
                );
            } else {
                if ($code != '0') {
                    return response()->json(
                        [
                            'reponse' => false,
                            'msg' => $jsonRes['message'],
                            'type' => "carte",
                            'data' => $code
                        ]
                    );
                } else {
                    $url = $jsonRes['url'];
                    $orderNumber = $jsonRes['orderNumber'];
                    $object = new stdClass();

                    $object->result_response = [
                        'message' => $message,
                        'order_number' => $orderNumber,
                        'type' => "carte",
                        'url' => $url
                    ];

                    // The donation is registered only if the processing succeed
                    // $contre = contreventionUser::where('reference', $inputs["reference"])->first();
                    // The donation is registered only if the processing succeed
                    // $contre->update(['etat' => '1']);

                    // // Register payment, even if FlexPay will
                    $payment = transaction::where('order_number', $jsonRes['orderNumber'])->first();

                    if (is_null($payment)) {
                        transaction::updateOrCreate(
                            ['reference' => $inputs["reference"]],
                            [
                                'order_number' => $jsonRes['orderNumber'],
                                'amount' => $inputs['amount'],
                                'phone' => $request->other_phone,
                                'currency' => $inputs['currency'],
                                'type_id' => $inputs["transaction_type_id"],
                            ]
                        );
                    }
                    // dd($jsonRes);
                    return response()->json(
                        [
                            'reponse' => true,
                            'msg' => 'Vous serez rediriger pour payé dans quelques instant!',
                            'type' => "carte",
                            'reference' => $inputs["reference"],
                            'url' => $jsonRes['url']
                        ]
                    );
                }
            }
        }
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
