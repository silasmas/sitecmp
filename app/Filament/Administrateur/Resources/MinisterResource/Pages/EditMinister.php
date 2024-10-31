<?php

namespace App\Filament\Administrateur\Resources\MinisterResource\Pages;

use App\Filament\Administrateur\Resources\MinisterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMinister extends EditRecord
{
    protected static string $resource = MinisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
