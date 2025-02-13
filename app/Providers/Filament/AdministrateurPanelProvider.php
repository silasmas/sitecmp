<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Hydrat\TableLayoutToggle\Persisters\LocalStoragePersister;
use Hydrat\FilamentTableLayoutToggle\Plugins\TableLayoutTogglePlugin;
use Joaopaulolndev\FilamentGeneralSettings\FilamentGeneralSettingsPlugin;

class AdministrateurPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('administrateur')
            ->path('administrateur')
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Green,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->colors([
                'primary' => "#650F1C",
                // 'primary' => Color::Amber,
            ])
            ->brandName('Dashboard CMP')
            // ->viteTheme('resources/css/filament/admin/theme.css')
            ->brandLogo(asset('assets/images/Logo-CMP-2023-red.png'))
            ->brandLogoHeight(fn() => auth()->check() ? '3rem' : '5rem')
            ->favicon(asset('assets/images/Logo-CMP-2023-red.png'))
            ->discoverResources(in: app_path('Filament/Administrateur/Resources'), for: 'App\\Filament\\Administrateur\\Resources')
            ->discoverPages(in: app_path('Filament/Administrateur/Pages'), for: 'App\\Filament\\Administrateur\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Administrateur/Widgets'), for: 'App\\Filament\\Administrateur\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->plugins([
                // FilaSortablePlugin::make()
                FilamentGeneralSettingsPlugin::make()
                    ->canAccess(fn() => auth()->user()->id === 2)
                    ->setSort(3)
                    ->setIcon('heroicon-o-cog')
                    ->setNavigationGroup('Configurations')
                    ->setTitle('Paramètres générale')
                    ->setNavigationLabel('Paramètres générale'),
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 3,
                        'lg' => 2
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),
                // TableLayoutTogglePlugin::make()->defaultLayout('grid') // Définit le layout par défaut pour un nouvel utilisateur
                // ->persistLayoutUsing(
                //     persister: LocalStoragePersister::class, // chose a persister to save the layout preference of the user
                //     cacheStore: 'redis', // optional, change the cache store for the Cache persister
                //     cacheTtl: 60 * 24, // optional, change the cache time for the Cache persister
                // )
                //     ->shareLayoutBetweenPages(false) // Permet de partager le layout entre les pages si true
                //     ->displayToggleAction() // Affiche automatiquement le bouton de bascule
                //     ->toggleActionHook('tables::toolbar.search.after') // Détermine où le bouton sera affiché
                //     ->listLayoutButtonIcon('heroicon-o-list-bullet')
                //     ->gridLayoutButtonIcon('heroicon-o-squares-2x2'),
            ]);
    }
}
