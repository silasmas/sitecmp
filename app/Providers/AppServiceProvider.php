<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Filament\Forms\Components\Wizard;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // \Filament\Resources\Resource::registerResources([
        //     \App\Filament\Administrateur\Resources\MissionnaireResource::class,
        // ]);
        view()->composer('*', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
        // Livewire::component('filament.pages.missionnaire', \App\Filament\Administrateur\Resources\MissionnaireResource\Pages\Missionnaire::class);
    }
}
