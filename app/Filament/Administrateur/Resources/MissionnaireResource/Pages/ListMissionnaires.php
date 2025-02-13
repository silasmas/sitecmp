<?php

namespace App\Filament\Administrateur\Resources\MissionnaireResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
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
}
