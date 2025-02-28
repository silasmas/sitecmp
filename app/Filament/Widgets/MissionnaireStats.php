<?php

namespace App\Filament\Widgets;

use App\Models\Missionnaire;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class MissionnaireStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Utilisateurs', Missionnaire::where('disponible', '1')->count())
                ->description('Nombre total des missionnaires disponible')
                ->icon('heroicon-o-users'),

            Card::make('Marié(e)s', Missionnaire::where('etat_civil','like', '%Marié%')->count())
                ->description('Nombre des mariés')
                ->color('success'),

            Card::make('Célibataires', Missionnaire::where('etat_civil','like', '%Célibataire%')->count())
                ->description('Nombre Célibataires')
                ->color('pink'),

            Card::make('Adultes (18-59 ans)', Missionnaire::whereBetween(DB::raw('TIMESTAMPDIFF(YEAR, birthday, CURDATE())'), [18, 59])->count())
                ->description('Missionnaires entre 18 et 59 ans')
                ->color('info'),

            Card::make('Personnes âgées (60 ans et +)', Missionnaire::where(DB::raw('TIMESTAMPDIFF(YEAR, birthday, CURDATE())'), '>=', 60)->count())
                ->description('Missionnaires de 60 ans et plus')
                ->color('gray'),
                Card::make('Missionnaires attachés au CMP',
                Missionnaire::where('eglise_attache', 'like', '%CMP%')->count()
            )
                ->description('Missionnaires dont l’église d’attache contient CMP')
                ->color('primary'),

        ];
    }
}
