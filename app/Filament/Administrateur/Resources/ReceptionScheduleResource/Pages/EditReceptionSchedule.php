<?php

namespace App\Filament\Administrateur\Resources\ReceptionScheduleResource\Pages;

use App\Filament\Administrateur\Resources\ReceptionScheduleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReceptionSchedule extends EditRecord
{
    protected static string $resource = ReceptionScheduleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
