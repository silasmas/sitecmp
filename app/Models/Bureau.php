<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function receptionSchedules()
    {
        return $this->hasMany(reception_schedule::class);
    }
}
