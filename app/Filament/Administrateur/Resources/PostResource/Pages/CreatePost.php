<?php

namespace App\Filament\Administrateur\Resources\PostResource\Pages;

use App\Filament\Administrateur\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
