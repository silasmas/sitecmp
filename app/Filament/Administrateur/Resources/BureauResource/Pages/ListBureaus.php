<?php

namespace App\Filament\Administrateur\Resources\BureauResource\Pages;

use App\Filament\Administrateur\Resources\BureauResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBureaus extends ListRecords
{
    protected static string $resource = BureauResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}