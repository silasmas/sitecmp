<?php

namespace App\Filament\Administrateur\Resources\MissionnaireResource\Pages;

use App\Filament\Administrateur\Resources\MissionnaireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMissionnaires extends ListRecords
{
    protected static string $resource = MissionnaireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
