<?php

namespace App\Http\Controllers;

use App\Models\Requete;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequeteRequest;
use App\Http\Requests\UpdateRequeteRequest;

class RequeteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("site.pages.requete");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $req = Requete::create([
            "fullname" => $request->fullname,
            "email" => $request->email,
            "phone" => $request->phone,
            "pays" => $request->country,
            "requete" => $request->requete,
        ]);
        if ($req) {
            return response()->json(
                [
                    'reponse' => true,
                    'msg' => 'Votre requete est envoyé avec succès!'
                ]
            );
        } else {
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => 'Une erreur'
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Requete $requete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requete $requete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequeteRequest $request, Requete $requete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requete $requete)
    {
        //
    }
}
