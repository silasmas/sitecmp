<?php

namespace App\Filament\Administrateur\Resources\OrffrandeResource\Pages;

use App\Filament\Administrateur\Resources\OrffrandeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrffrande extends EditRecord
{
    protected static string $resource = OrffrandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
