<?php

namespace App\Providers;

use App\Models\team;
use App\Models\about;
use App\Models\projet;
use App\Models\article;
use App\Models\service;
use App\Models\activite;
use App\Models\categorie;
use App\Models\Partenaire;
use App\Models\thematique;
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


            // $teamCat = team::select('poste')->where('is_active', true)->distinct()->get();
            // $galerieProjet = projet::select('images')->where('is_active', true)->get();
            // $galerieArticle = article::select('images')->where('is_active', true)->get();
            // $team = team::where('is_active', true)->get();

            // $menuService = service::where('is_active', true)->get();
            // $menuDomaine = thematique::where('is_active', true)->get();
            // $projets = projet::where('is_active', true)->get();
            // $articles = article::where('is_active', true)->get();
            // $about = about::first();

            // $recentProjets = projet::orderBy('created_at', 'desc')->take(5)->where('is_active', true)->get();
            // $recentArticles = article::orderBy('created_at', 'desc')->take(5)->where('is_active', true)->get();
            // $partenaires = Partenaire::where('is_active', true)->get();


            $st = ($settings !== null && $settings->social_network !== null) ? json_decode($settings->social_network, true) : "";
            // dd($projets[0]->Formatted_created_at->format('d'));
            $view->with('title', $titre);
            $view->with('settings', $st);
            $view->with('setting', $settings);
            // $view->with('teamCat', $teamCat);
            // $view->with('team', $team);
            // $view->with('menuService', $menuService);
            // $view->with('menuDomaine', $menuDomaine);
            // $view->with('projets', $projets);
            // $view->with('galerieArticle', $galerieArticle);
            // $view->with('galerieProjet', $galerieProjet);
            // $view->with('recentProjets', $recentProjets);
            // $view->with('recentArticles', $recentArticles);
            // $view->with('articles', $articles);
            // $view->with('about', $about);
            // $view->with('partenaires', $partenaires);
        });
    }
}
