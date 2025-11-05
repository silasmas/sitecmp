<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Event;
use App\Models\video;
use App\Models\Minister;
use Illuminate\View\View;
use App\Beans\enteteState;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{

    public function changeLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
    public function home()
    {
        $state = new enteteState;
        $tableaudesEtats = $state->EtatDEntete('accueil');
        $mytime = Carbon::now();
        // $quotes = Quote::where("is_active", "=", 1)->orderBy('est_a_la_une', 'DESC')->orderBy('created_at', 'DESC')->take(3)->get();
        $events = Event::where("is_active", "=", 1)->where("date_fin", '>', $mytime)->orderBy("est_a_la_une", 'DESC')->orderBy('date_debut', 'ASC')->take(3)->get();
        $posts = Post::where("is_active", "=", 1)->where("type", "=", 3)->orderBy('date_publication', 'DESC')->take(3)->get();
        $testimonials = Testimonial::where("is_active", "=", 1)->orderBy("created_at", "DESC")->get();
        // $event_popup = Event::where("is_active","=", 1)->where("date_fin", '>', $mytime)->where("est_popup","=", 1)->orderBy('date_debut', 'ASC')->take(1)->get();
        // dd($posts);
        return view('site.pages.home')->with([
            'title' => "Accueil",
            'EnteteState' => $tableaudesEtats,
            'events' => $events,
            'posts' => $posts,
            'testimonials' => $testimonials,
        ]);
    }
    public function about()
    {
        $pastors = Minister::where("is_active", true)->get();
        return view('site.pages.about', compact("pastors"));
    }
    public function mur()
    {
            // TODO: remplace par des données réelles, groupées par utilisateur/auteur
        // Exemple statique minimal :
        $stories = [
            [
                "id" => "user_1",
                "photo" => asset('assets/videos/thumb1.jpg'),
                "name" => "Silas",
                "link" => "#",
                "lastUpdated" => time(),
                "items" => [
                    [
                        "id" => "u1-s1",
                        "type" => "photo",   // "photo" ou "video"
                        "length" => 5,
                        "src" => asset('assets/videos/story1.mp4'),
                        "preview" => asset('assets/videos/thumb1.jpg'),
                        "seen" => false,
                        "time" => time() - 3600
                    ],
                    [
                        "id" => "u1-s2",
                        "type" => "video",
                        "length" => 12,
                        "src" => asset('assets/videos/story3.mp4'),
                        "preview" => asset('assets/videos/thumb1.jpg'),
                        "seen" => false,
                        "time" => time() - 3500
                    ]
                ]
            ],
            [
                "id" => "user_2",
                "photo" => asset('assets/videos/thumb1.jpg'),
                "name" => "Naomi",
                "link" => "#",
                "lastUpdated" => time() - 7200,
                "items" => [
                    [
                        "id" => "u2-s1",
                        "type" => "video",
                        "length" => 9,
                        "src" => asset('assets/videos/story1.mp4'),
                        "preview" => asset('assets/videos/thumb1.jpg'),
                        "seen" => false,
                        "time" => time() - 7000
                    ],
                ]
            ],
        ];

        return view('site.pages.mur', compact("stories"));
    }

    public function events()
    {
        return view('site.pages.events');
    }
    public function projects()
    {
        return view('site.pages.projets');
    }
    public function contact()
    {
        return view('site.pages.contact');
    }
    public function galerie()
    {
        return view('site.pages.galerie');
    }
    public function contributions()
    {
        return view('site.pages.contributions');
    }
    public function bunda()
    {
        // title'=>"Bunda 21: Logement", 'EnteteState'=>$tableaudesEtats
        $state = new enteteState;
        $tableaudesEtats = $state->EtatDEntete('bunda');
        return view('site.pages.bunda', [
            'title' => "Bunda 21: Logement",
            'EnteteState' => $tableaudesEtats,
        ]);
    }
    public function playliste()
    {

        return view('site.pages.bunda.playliste');
    }
    public function videos()
    {
        $videos = video::all();
        // dd($videos);
        return view('site.pages.videos', compact('videos'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {

        // $project = Project::findOrFail(2);
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
