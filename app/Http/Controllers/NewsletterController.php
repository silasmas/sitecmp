<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use App\Models\newsletters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $re =   Validator::make(
            $request->all(),
            [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:newsletters'],
            ]
        );
        if ($re->passes()) {
            $rep = newsletters::create(
                [
                    "email" => $request->email,
                ]
            );
            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'Abonnement fait avec succès',
                    ]
                );
            } else {
                return response()->json(
                    [
                        'reponse' => false,
                        'msg' => 'Erreur',
                    ]
                );
            }
        } else {
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => $re->errors()->first(),
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newsletter $newsletter)
    {
        //
    }
}
