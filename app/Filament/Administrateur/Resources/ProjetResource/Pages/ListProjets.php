<?php

namespace App\Filament\Administrateur\Resources\ProjetResource\Pages;

use App\Filament\Administrateur\Resources\ProjetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjets extends ListRecords
{
    protected static string $resource = ProjetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
