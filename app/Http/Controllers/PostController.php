<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
use App\Models\Minister;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts=Post::all();
        return view("admin.pages.publication",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts=Post::all();
        $events=Event::all();
        $pasteurs=Minister::all();
        return view("admin.pages.insert.addPublication",compact("posts","events","pasteurs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $re = Validator::make(
            $request->all(),
            [
                'title_fr' => ['required', 'string'],
                'title_en' => ['required', 'string'],
                'date_debut' => ['required', 'string'],
                'is_active' => ['required', 'string'],
                'descriptiom_fr' => ['required', 'string'],
                'descriptiom_en' => ['required', 'string'],
                'image_fr' => ['required', 'image','max:2000'],
                'image_en' => ['required', 'image','max:2000'],
            ]
        );

        if ($re->passes()) {
            $file = $request->file('image_fr');
            $file2 = $request->file('image_en');

            $image_fr = $file == '' ? '' : 'posts/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/posts', $image_fr);

            $image_en = $file2 == '' ? '' : 'posts/' . time() . '.' . $file2->getClientOriginalName();
            $file2 == '' ? '' : $file2->move('storage/posts', $image_en);
            // dd('ok');
            $rep = Post::create(
                [
                    "title" => ['fr' => $request->title_fr, 'en' => $request->title_en],
                    "theme" => ['fr' => $request->theme_fr, 'en' => $request->theme_en],
                    "date_debut" => $request->date_debut,
                    "date_fin" => $request->date_fin,
                    "image_url" => ['fr' => $image_fr, 'en' => $image_en],
                    "orateur" => $request->orateur,
                    "type" => $request->type,
                    "minister_id" => $request->minister_id,
                    "is_active" => $request->is_active,
                    "body" => ['fr' => $request->descriptiom_fr, 'en' => $request->descriptiom_en],
                ]
            );

            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'Post enregistrer avec succés!',
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
    public function show()
    {
        return view("site.pages.article-details");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
