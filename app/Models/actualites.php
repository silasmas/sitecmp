<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actualites extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'is_active' => 'boolean',
        'publish_at' => 'datetime',
        'expire_at' => 'datetime',
    ];
}
