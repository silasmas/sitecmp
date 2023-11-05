<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatevideoRequest;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
        return view("admin.pages.videos", compact("videos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.insert.galerie");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $re = Validator::make(
            $request->all(),
            [
                'titre_fr' => ['required', 'string'],
                'titre_en' => ['required', 'string'],
                'description_fr' => ['required', 'string'],
                'description_en' => ['required', 'string'],
                'video' => ['required', 'string'],
                'dateRealiser' => ['required', 'string'],
                'jour' => ['required', 'string'],
                'active' => ['required', 'string'],
                'image_fr' => ['required', 'image', 'max:2000'],
            ]
        );

        if ($re->passes()) {
            $file = $request->file('image_fr');

            $image_fr = $file == '' ? '' : 'videos/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/videos', $image_fr);

            $rep = video::create(
                [
                    "titre" => ['fr' => $request->titre_fr, 'en' => $request->titre_en],
                    "video" => $request->video,
                    "description" => ['fr' => $request->description_fr, 'en' => $request->description_en],
                    "dateRealiser" => $request->dateRealiser,
                    "jour" => $request->jour,
                    "imag_url" => $image_fr,
                    "is_active" => $request->active,
                    ]
                );


            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'La video est enregistrer avec succés!',
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
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevideoRequest $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video $video)
    {
        //
    }
}
