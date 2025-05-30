<?php

namespace App\Providers;

use App\Models\actualites;
use App\Models\Post;
use App\Models\Event;
use App\Models\Minister;
use App\Models\Offrande;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $titre = getTitle(Route::currentRouteName());

            $settings = DB::table('general_settings')->first();
            $actualites = actualites::where("is_active", "1")->first();

            $pasteurs = Minister::where('is_active', true)->get();
            $eventbunda = Event::with('posts')
                ->where('is_active', true)
                ->whereRaw('JSON_UNQUOTE(JSON_EXTRACT(designation, "$.fr")) LIKE ?', ['%Bunda%']) // Recherche dans JSON avec LIKE
                ->select(
                    'id',
                    'date_debut',
                    'designation',
                    'lieu',
                    'orateur',
                    'date_fin',
                    'theme',
                    'references',
                    'image_url',
                    'description',
                    'est_a_la_une'
                )
                ->selectRaw('YEAR(date_debut) as year, MONTH(date_debut) as month') // Ajouter année et mois
                ->groupBy(
                    'id',
                    'date_debut',
                    'designation',
                    'lieu',
                    'orateur',
                    'date_fin',
                    'theme',
                    'references',
                    'image_url',
                    'description',
                    'est_a_la_une',
                    'year',
                    'month'
                )
                ->orderBy('year') // Trier par année
                ->orderBy('month') // Trier par mois
                ->get();

            $post = Post::with("minister", "event")->orderByDesc('date_publication')->where('is_active', 1)->get();
            $offrandes = Offrande::where('is_active', 1)->get();
            $posts = Post::orderByDesc('date_publication')->get();

            // Obtenir le total séparément si nécessaire
            $total = Event::where('is_active', true)
                ->whereRaw('JSON_UNQUOTE(JSON_EXTRACT(designation, "$.fr")) LIKE ?', ['%Bunda%'])
                ->count();



            $st = ($settings !== null && $settings->social_network !== null) ? json_decode($settings->social_network, true) : "";
            $st2 = ($settings !== null && $settings->site_logo !== null) ? $settings : "";
            // dd($actualites->img_url);
            $view->with('title', $titre);
            $view->with('settings', $st);
            $view->with('site', $st2);
            $view->with('setting', $settings);
            $view->with('eventbunda', $eventbunda);
            $view->with('pasteurs', $pasteurs);
            $view->with('post', $post);
            $view->with('offrandes', $offrandes);
            $view->with('posts', $posts);
            $view->with('actualites', $actualites);
        });
    }
}
