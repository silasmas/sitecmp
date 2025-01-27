<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Minister;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::with(["minister"])->get();

        return view("admin.pages.publication", compact("posts"));
    }
    public function articles()
    {

        //   dd($posts);
        return view('site.pages.articles');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $articles = Post::query()->where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhereHas('minister', function ($query) {
                $query->where('fullname', 'like', '%' . $query . '%');
            })
            ->orderBy('date_publication', 'desc')
            ->take(10) // Limite les résultats pour optimiser la requête
            ->get();
        dd($articles);
        // $articles = Post::query()
        //     ->where('title', 'like', "%{$query}%")
        //     ->orWhere('body', 'like', "%{$query}%")
        //     ->orWhereHas('minister', function ($q) use ($query) {
        //         $q->where('fullname', 'like', "%{$query}%");
        //     })
        //     ->get();

        return response()->json($articles);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $posts = Post::all();
        $events = Event::all();
        $pasteurs = Minister::all();
        return view("admin.pages.insert.addPublication", compact("posts", "events", "pasteurs"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->description_fr);
        $re = Validator::make(
            $request->all(),
            [
                'title_fr' => ['required', 'string'],
                // 'title_en' => ['required', 'string'],
                'type' => ['required', 'string'],
                'date_debut' => ['required', 'string'],
                'is_active' => ['required', 'string'],
                'description_fr' => ['required', 'string'],
                // 'description_en' => ['required', 'string'],
                'image_fr' => ['required', 'image', 'max:2000'],
                // 'image_en' => ['required', 'image', 'max:2000'],
            ]
        );

        if ($re->passes()) {
            $file = $request->file('image_fr');
            // $file2 = $request->file('image_en');

            $image_fr = $file == '' ? '' : 'posts/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/posts', $image_fr);

            // $image_en = $file2 == '' ? '' : 'posts/' . time() . '.' . $file2->getClientOriginalName();
            // $file2 == '' ? '' : $file2->move('storage/posts', $image_en);
            // dd('ok');
            $rep = Post::create(
                [
                    "title" => ['fr' => $request->title_fr, 'en' => $request->title_en],
                    "date_publication" => $request->date_debut,
                    "image_url" => ['fr' => $image_fr, 'en' => ""],
                    "author" => $request->orateur,
                    "type" => $request->type,
                    "link_url" => $request->link_url,
                    "event_id" => $request->event,
                    "minister_id" => $request->minister_id,
                    "is_active" => $request->is_active,
                    "body" => ['fr' => $request->description_fr, 'en' => $request->description_en],
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
    public function show($jour)
    {
        // dd($jour);
        $days = [
            1 => 'Dimanche',
            2 => 'Lundi',
            3 => 'Mardi',
            4 => 'Mercredi',
            5 => 'Jeudi',
            6 => 'Vendredi',
            7 => 'Samedi',
        ];

        // $dayOfWeek = 3; // Exemple : Mardi
        // Trouver la clé (entier) correspondant au jour passé en paramètre
        $dayOfWeek = array_search(ucfirst(strtolower($jour)), $days);
        //dd($dayOfWeek);

        // Si le jour fourni est invalide, retourner une erreur ou une vue par défaut
        if (!$dayOfWeek) {
            // return redirect()->back()->with('error', 'Jour invalide.');
            $post = [];
            $posts = Post::get();
            return view("site.pages.articles", compact('post', 'posts'));
        }
        $post = Post::where('is_active', true)
            ->whereRaw('DAYOFWEEK(date_publication) = ?', [$dayOfWeek])
            ->first();

        $dayName = $days[$dayOfWeek]; // Résultat : "Mardi"
        $posts = Post::get();
        return view("site.pages.articles", compact('post', 'posts'));
    }
    public function tagNamePast($slug)
    {
        // $post = Post::findOrFail($id);
        $postt = bySlug($slug, Post::class);
        $posts = Post::get();
        // dd($post->title);
        return view("site.pages.article-details", compact('postt', 'posts'));
    }
    // public function show($slug)
    // {
    //     // $post = Post::findOrFail($id);
    //     $post = bySlug($slug,Post::class);
    //     $posts = Post::get();
    //     return view("site.pages.article-details", compact('post', 'posts'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $events = Event::all();
        $pasteurs = Minister::all();
        $dataPost = Post::findOrFail($id);
        return view('admin.pages.insert.addPublication', compact('dataPost', "events", "pasteurs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $re = Validator::make(
            $request->all(),
            [
                'title_fr' => ['required', 'string'],
                // 'title_en' => ['required', 'string'],
                'type' => ['required', 'string'],
                'date_debut' => ['required', 'string'],
                'is_active' => ['required', 'string'],
                'description_fr' => ['required', 'string'],
                // 'description_en' => ['required', 'string'],
                'image_fr' => ['required', 'image', 'max:2000'],
                // 'image_en' => ['required', 'image', 'max:2000'],
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
                    "date_publication" => $request->date_debut,
                    "image_url" => ['fr' => $image_fr, 'en' => $image_en],
                    "author" => $request->orateur,
                    "type" => $request->type,
                    "event_id" => $request->event,
                    "minister_id" => $request->minister_id,
                    "is_active" => $request->is_active,
                    "body" => ['fr' => $request->description_fr, 'en' => $request->description_en],
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
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
