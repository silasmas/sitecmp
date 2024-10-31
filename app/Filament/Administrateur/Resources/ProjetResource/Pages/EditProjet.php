<?php

namespace App\Filament\Administrateur\Resources\ProjetResource\Pages;

use App\Filament\Administrateur\Resources\ProjetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjet extends EditRecord
{
    protected static string $resource = ProjetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
