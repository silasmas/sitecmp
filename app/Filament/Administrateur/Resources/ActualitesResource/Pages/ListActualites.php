<?php

namespace App\Filament\Administrateur\Resources\ActualitesResource\Pages;

use App\Filament\Administrateur\Resources\ActualitesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActualites extends ListRecords
{
    protected static string $resource = ActualitesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
