<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
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
        // Filament::auth(function ($request) {
        //     // Récupérer le nom de la route actuelle
        //     $route = $request->route()->getName();
        //     // Désactiver l'authentification pour la route 'missionnaire'
        //     return $route !== 'missionnaire';
        // });
        // // // Ignorer l'authentification pour certaines pages
        // Filament::auth(function ($request) {
        //     $route = $request->route()->getName();

        //     // Désactiver l'authentification pour la page `public-user-form`
        //     return $route !== 'missionnaire';
        // });
    }
}
