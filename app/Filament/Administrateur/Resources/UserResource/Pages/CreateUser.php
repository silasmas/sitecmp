<?php

namespace App\Filament\Administrateur\Resources\UserResource\Pages;

use App\Filament\Administrateur\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
