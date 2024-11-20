<?php

namespace App\Providers;


use App\Models\Event;
use App\Models\Minister;
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
        View::composer('site.*', function ($view) {
            $titre = getTitle(Route::currentRouteName());

            $settings = DB::table('general_settings')->first();


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

            // dd($eventbunda);
            // Obtenir le total séparément si nécessaire
            $total = Event::where('is_active', true)
                ->whereRaw('JSON_UNQUOTE(JSON_EXTRACT(designation, "$.fr")) LIKE ?', ['%Bunda%'])
                ->count();



            $st = ($settings !== null && $settings->social_network !== null) ? json_decode($settings->social_network, true) : "";
            $view->with('title', $titre);
            $view->with('settings', $st);
            $view->with('setting', $settings);
            $view->with('eventbunda', $eventbunda);
            $view->with('pasteurs', $pasteurs);
        });
    }
}
