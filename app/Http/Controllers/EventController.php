<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.pages.events', compact('events'));
    }
    public function dashboard()
    {
        return view('admin.pages.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('admin.pages.insert.addEvent', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $re = Validator::make(
            $request->all(),
            [
                'designation_fr' => ['required', 'string'],
                'designation_en' => ['required', 'string'],
                'theme_fr' => ['required', 'string'],
                'theme_en' => ['required', 'string'],
                'references_fr' => ['required', 'string'],
                'references_en' => ['required', 'string'],
                'orateur' => ['required', 'string'],
                'type' => ['required', 'string'],
                'est_a_la_une' => ['required', 'string'],
                'active' => ['required', 'string'],
                'date_debut' => ['required', 'date'],
                'date_fin' => ['required', 'date'],
                'image_fr' => ['required', 'image','max:2000'],
                'image_en' => ['required', 'image','max:2000'],
            ]
        );

        if ($re->passes()) {
            $file = $request->file('image_fr');
            $file2 = $request->file('image_en');

            $image_fr = $file == '' ? '' : 'event/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/event', $image_fr);

            $image_en = $file2 == '' ? '' : 'event/' . time() . '.' . $file2->getClientOriginalName();
            $file2 == '' ? '' : $file2->move('storage/event', $image_en);
            // dd('ok');
            $rep = Event::create(
                [
                    "designation" => ['fr' => $request->designation_fr, 'en' => $request->designation_en],
                    "theme" => ['fr' => $request->theme_fr, 'en' => $request->theme_en],
                    "references" => ['fr' => $request->references_fr, 'en' => $request->references_en],
                    "date_debut" => $request->date_debut,
                    "date_fin" => $request->date_fin,
                    "image_url" => ['fr' => $image_fr, 'en' => $image_en],
                    "orateur" => $request->orateur,
                    "type" => $request->type,
                    "est_a_la_une" => $request->est_a_la_une,
                    "is_active" => $request->active,
                ]
            );

            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'Evenement enregistrer avec succés!',
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
            // dd( $re->errors()->first());
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => $re->errors()->first(),
                    'datas' => $re->errors(),
                ]
            );
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): RedirectResponse | View
    {
        $dataEvent = Event::findOrFail($id);
        return view('admin.pages.insert.addEvent', compact('dataEvent'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $events = $event::find($request->id);
        $designation_fr = $request->designation_fr == $events->getTranslation('designation', 'fr') ? $events->getTranslation('designation', 'fr') : $request->designation_fr;
        $designation_en = $request->designation_en == $events->getTranslation('designation', 'en') ? $events->getTranslation('designation', 'en') : $request->designation_en;
        $theme_fr = $request->theme_fr == $events->getTranslation('theme', 'fr') ? $events->getTranslation('theme', 'fr') : $request->theme_fr;
        $theme_en = $request->designation_en == $events->getTranslation('theme', 'en') ? $events->getTranslation('theme', 'en') : $request->designation_en;
        $references_fr = $request->references_fr == $events->getTranslation('references', 'fr') ? $events->getTranslation('references', 'fr') : $request->references_fr;
        $references_en = $request->references_en == $events->getTranslation('references', 'en') ? $events->getTranslation('references', 'en') : $request->references_en;
        $orateur = $request->orateur == $events->orateur ? $events->orateur : $request->orateur;
        $date_debut = $request->date_debut == $events->date_debut ? $events->date_debut : $request->date_debut;
        $date_fin = $request->date_fin == $events->date_fin ? $events->date_fin : $request->date_fin;
        $type = $request->type == $events->type ? $events->type : $request->type;
        $est_a_la_une = $request->est_a_la_une == $events->est_a_la_une ? $events->est_a_la_une : $request->est_a_la_une;
        $active = $request->active == $events->active ? $events->active : $request->active;
        $image_fr = "";
        $image_en = "";
        if ($request->file("image_fr") != null) {
            $photo = public_path() . '/storage/' . $events->getTranslation('image_url', 'fr');
            file_exists($photo) ? unlink($photo) : '';
            $image_fr = 'event/' . time() . '.' . $request->file("image_fr")->getClientOriginalName();
            $request->file("image_fr")->move('storage/event', $image_fr);
        } else {
            $image_fr = $events->getTranslation('image_url', 'fr');
        }
        if ($request->file("image_en") != null) {
            $photo = public_path() . '/storage/' . $events->getTranslation('image_url', 'en');
            file_exists($photo) ? unlink($photo) : '';
            $image_en = 'event/' . time() . '.' . $request->file("image_en")->getClientOriginalName();
            $request->file("image_en")->move('storage/event', $image_en);
        } else {
            $image_en = $events->getTranslation('image_url', 'en');
        }
        // dd($rap);
        $rep = $events->update([
            "designation" => ['fr' => $designation_fr, 'en' => $designation_en],
            "theme" => ['fr' => $theme_fr, 'en' => $theme_en],
            "references" => ['fr' => $references_fr, 'en' => $references_en],
            "date_debut" => $date_debut,
            "date_fin" => $date_fin,
            "image_url" => ['fr' => $image_fr, 'en' => $image_en],
            "orateur" => $orateur,
            "type" => $type,
            "est_a_la_une" => $est_a_la_une,
            "is_active" => $active,
        ]);
        if ($rep) {
            return response()->json(
                [
                    'reponse' => true,
                    'msg' => 'Evenement mis à jour avec succés!',
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $id,Event $events)
    {
        // dd($id->idv);
        $event = $events::find($id->idv);
        if ($event) {
            $photo_fr = public_path() .'/storage/'. $event->getTranslation('image_url', 'fr');
            $photo_en = public_path() .'/storage/'. $event->getTranslation('image_url', 'en');

            if ($event->image_url) {
                file_exists($photo_fr) ? unlink($photo_fr) : '';
                file_exists($photo_en) ? unlink($photo_en) : '';
            }
            $event->delete();
            if ($event) {
                return response()->json([
                    'reponse' => true,
                    'msg' => 'Suppression Réussie.',
                ]);
            }
        } else {
            return response()->json([
                'reponse' => false,
                'msg' => 'Aucun enregistrement trouver',
            ]);
        }
    }
}
