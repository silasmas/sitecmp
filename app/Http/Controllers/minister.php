<?php

namespace App\Http\Controllers;

use App\Models\Minister as ministre;
use App\Models\Minister as ModelsMinister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class minister extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pasteurs = ModelsMinister::all();

        return view("admin.pages.ministre", compact("pasteurs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasteurs = ModelsMinister::all();

        return view("admin.pages.insert.addMinistre", compact("pasteurs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $re = Validator::make(
            $request->all(),
            [
                'fullname' => ['required', 'string'],
                // 'bio' => ['required', 'string'],
                'is_titular' => ['required', 'string'],
                'is_active' => ['required', 'string'],
                'contact' => ['required', 'string'],
                'type' => ['required', 'string'],
                'image_url' => ['required', 'image', 'max:2000'],
            ]
        );

        if ($re->passes()) {
            $file = $request->file('image_url');
            $image_url = $file == '' ? '' : 'ministre/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/ministre', $image_url);
            $rep = ministre::create(
                [
                    "fullname" => $request->fullname,
                    "contact" => $request->contact,
                    "bio" => $request->bio,
                    "image_url" => $image_url,
                    "is_titular" => $request->is_titular,
                    "is_active" => $request->is_active,
                    "twitter_url" => $request->twitter_url,
                    "facebook_url" => $request->facebook_url,
                    "instagram_url" => $request->instagram_url,
                    "youtube_url" => $request->youtube_url,
                    "type" => $request->type,
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataMinister = ministre::findOrFail($id);
        return view('admin.pages.insert.addMinistre', compact('dataMinister'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ministre $ministre)
    {

        $re = Validator::make(
            $request->all(),
            [
                'fullname' => ['required', 'string'],
                'bio' => ['required', 'string'],
                'is_titular' => ['required', 'string'],
                'is_active' => ['required', 'string'],
                'contact' => ['required', 'string'],
                'type' => ['required', 'string'],
                // 'image_url' => ['required', 'image', 'max:2000'],
            ]
        );
        if ($re->passes()) {
            $events = $ministre::find($request->id);
            $fullname = $request->fullname == $events->fullname ? $events->fullname : $request->fullname;
            $contact = $request->contact == $events->contact ? $events->contact : $request->contact;
            $bio = $request->bio == $events->bio ? $events->bio : $request->bio;
            $image_url = $request->image_url == $events->image_url ? $events->image_url : $request->image_url;
            $is_titular = $request->is_titular == $events->is_titular ? $events->is_titular : $request->is_titular;
            $is_active = $request->is_active == $events->is_active ? $events->is_active : $request->is_active;
            $twitter_url = $request->twitter_url == $events->twitter_url ? $events->twitter_url : $request->twitter_url;
            $facebook_url = $request->facebook_url == $events->facebook_url ? $events->facebook_url : $request->facebook_url;
            $instagram_url = $request->instagram_url == $events->instagram_url ? $events->instagram_url : $request->instagram_url;
            $youtube_url = $request->youtube_url == $events->youtube_url ? $events->youtube_url : $request->youtube_url;
            $type = $request->type == $events->type ? $events->type : $request->type;

            $image_fr = "";
            if ($request->file("image_url") != null) {
                    $photo = public_path() . '/storage/' . $image_url;
                    file_exists($photo) ? unlink($photo) : '';
                    $image_fr = 'ministre/' . time() . '.' . $request->file("image_url")->getClientOriginalName();
                    $request->file("image_url")->move('storage/ministre', $image_fr);                
            } else {
                $image_fr = $events->image_url;
            }

            $rep = $events->update([
                "fullname" => $fullname,
                "contact" => $contact,
                "bio" => $bio,
                "is_titular" => $is_titular,
                "is_active" => $is_active,
                "image_url" => $image_fr,
                "twitter_url" => $twitter_url,
                "instagram_url" => $instagram_url,
                "facebook_url" => $facebook_url,
                "type" => $type,
                "youtube_url" => $youtube_url,
            ]);
            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'Ministre mis à jour avec succés!',
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $min = ministre::find($id);
        if ($min) {
            $photo_fr = public_path() .'/storage/'. $min->image_url;

            if ($min->image_url) {
                file_exists($photo_fr) ? unlink($photo_fr) : '';
            }
            $min->delete();
            if ($min) {
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
