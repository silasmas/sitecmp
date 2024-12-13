<?php

namespace App\Http\Controllers;

use App\Models\Missionnaire;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMissionnaireRequest;
use App\Http\Requests\UpdateMissionnaireRequest;

class MissionnaireController extends Controller
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
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'birthday' => 'required|date',
            'age' => 'nullable|string|max:255',
            'adresse' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:missionnaires,email',
            'etat_civil' => 'nullable|string|max:255',
            'profession' => 'nullable|string|max:255',
            'annee_conversion' => 'nullable|string|max:255',
            'lieu_bapteme' => 'nullable|string|max:255',
            'date_bapteme' => 'nullable|date',
            'eglise_attache' => 'nullable|string|max:255',
            'temps_au_cmp' => 'nullable|string|max:255',
            'departement' => 'nullable|string|max:255',
            'participer_mission' => 'nullable|in:0,1',
            'description_mission' => 'nullable|string',
            'formation_biblique' => 'nullable|in:0,1',
            'niveau' => 'nullable|string|max:255',
            'lecture_bible' => 'nullable|string|max:255',
            'livre_bible' => 'nullable|string|max:255',
            'base_mission' => 'nullable|string|max:255',
            'concepte_familier' => 'nullable|string|max:255',
            'langue_fr' => 'nullable|string|max:255',
            'langue_en' => 'nullable|string|max:255',
            'autres' => 'nullable|string|max:255',
            'competence' => 'nullable|string',
            'outils_rs' => 'nullable|in:0,1',
            'but_formation' => 'nullable|string',
            'objectif' => 'nullable|string',
            'disponible' => 'nullable|in:0,1',
            'validationFormulaire' => 'nullable|in:0,1',
            'note_validation' => 'nullable|string|max:1000',
        ]);

        // if ($validated) {
        // Enregistrement des données validées dans la base de données
        Missionnaire::create($validated);

        return back()->with('success', 'Vos informations ont été envoyée avec succès!');
        // } else {
        //     return back()->with('success', 'Votre message a été envoyé avec succès!');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Missionnaire $missionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Missionnaire $missionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMissionnaireRequest $request, Missionnaire $missionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Missionnaire $missionnaire)
    {
        //
    }
}
