<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class old_Localization
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
        // Vérifiez si la route existe pour éviter les erreurs
        // if (\Route::has('filament.admin.resources.missionnaires.index')) {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            // Check header request and determine localization
            $local = ($request->hasHeader('X-localization')) ? $request->header('X-localization') : 'fr';

            App::setLocale($local);
        }
        // }

        return $next($request);
    }
}
