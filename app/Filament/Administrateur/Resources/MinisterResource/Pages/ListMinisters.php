<?php

namespace App\Filament\Administrateur\Resources\MinisterResource\Pages;

use App\Filament\Administrateur\Resources\MinisterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMinisters extends ListRecords
{
    protected static string $resource = MinisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
