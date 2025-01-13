<?php

namespace App\Filament\Administrateur\Resources\RequeteResource\Pages;

use App\Filament\Administrateur\Resources\RequeteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequetes extends ListRecords
{
    protected static string $resource = RequeteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
