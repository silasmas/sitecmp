<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Liste des langues supportées
        $availableLocales = ['fr', 'en', 'es', 'de']; // Ajoutez d'autres langues si nécessaire

        if (Session::has('locale') && in_array(Session::get('locale'), $availableLocales)) {
            $locale = Session::get('locale');
        } elseif ($request->hasHeader('X-localization') && in_array($request->header('X-localization'), $availableLocales)) {
            $locale = $request->header('X-localization');
            Session::put('locale', $locale); // Stocker dans la session pour une utilisation future
        } else {
            // Langue par défaut définie dans config/app.php
            $locale = config('app.locale', 'fr');
            Session::put('locale', $locale);
        }

        // Appliquer la langue sélectionnée
        App::setLocale($locale);

        // return $next($request);
        if (env('IGNORE_LOCALIZATION', false)) {
            return $next($request);
        }
    }
}
