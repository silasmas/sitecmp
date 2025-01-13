<?php

namespace App\Filament\Administrateur\Resources\RequeteResource\Pages;

use App\Filament\Administrateur\Resources\RequeteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequete extends EditRecord
{
    protected static string $resource = RequeteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
