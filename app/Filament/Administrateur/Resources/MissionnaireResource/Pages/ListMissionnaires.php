<?php

namespace App\Filament\Administrateur\Resources\MissionnaireResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Widgets\MissionnaireStats;
use Hydrat\TableLayoutToggle\Concerns\HasToggleableTable;
use App\Filament\Administrateur\Resources\MissionnaireResource;

class ListMissionnaires extends ListRecords
{
    use HasToggleableTable;
    protected static string $resource = MissionnaireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            MissionnaireStats::class, // Affichage des widgets dans l'en-tête
        ];
    }
}
