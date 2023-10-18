<?php

namespace App\Http\Controllers;

use App\Models\Minister as ministre;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Minister as ModelsMinister;

class minister extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pasteurs=ModelsMinister::all();
        
        return view("admin.pages.ministre",compact("pasteurs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasteurs=ModelsMinister::all();
        
        return view("admin.pages.insert.addMinistre",compact("pasteurs"));
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
                'image_url' => ['required', 'image','max:2000'],
            ]
        );

        if ($re->passes()) {
            $file = $request->file('image_url');
            $image_url = $file == '' ? '' : 'ministre/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/ministre', $image_url);
            $rep = ministre::create(
                [
                    "fullname" =>  $request->fullname,
                    "contact" =>$request->contact,
                    "bio" => $request->bio,
                    "image_url" =>  $image_url,
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
