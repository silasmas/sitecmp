<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Event;
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
    public function home(){
        $state=new enteteState;
        $tableaudesEtats = $state->EtatDEntete('accueil');
        $mytime = Carbon::now();
        // $quotes = Quote::where("is_active", "=", 1)->orderBy('est_a_la_une', 'DESC')->orderBy('created_at', 'DESC')->take(3)->get();
        $events = Event::where("is_active","=", 1)->where("date_fin", '>', $mytime)->orderBy("est_a_la_une", 'DESC')->orderBy('date_debut', 'ASC')->take(3)->get();
        $posts = Post::where("is_active", "=", 1)->where("type", "=", 3)->orderBy('date_publication', 'DESC')->take(3)->get();
        $testimonials = Testimonial::where("is_active", "=", 1)->orderBy("created_at", "DESC")->get();
       // $event_popup = Event::where("is_active","=", 1)->where("date_fin", '>', $mytime)->where("est_popup","=", 1)->orderBy('date_debut', 'ASC')->take(1)->get();
        // dd($posts);
        return view('site.pages.index')->with(['title'=>"Accueil",
                                    'EnteteState'=>$tableaudesEtats,
                                    'events' => $events,
                                    'posts' => $posts,
                                    'testimonials' => $testimonials,
        ]);
    }
    public function about(){
        return view('site.pages.about');
    }
    public function articles(){
        return view('site.pages.articles');
    }
    public function events(){
        return view('site.pages.events');
    }
    public function projects(){
        return view('site.pages.projets');
    }
    public function contact(){
        return view('site.pages.contact');
    }
    public function galerie(){
        return view('site.pages.galerie');
    }
    public function contributions(){
        return view('site.pages.contributions');
    }
    
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
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
