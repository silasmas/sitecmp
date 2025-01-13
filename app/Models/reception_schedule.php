<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reception_schedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pastor()
    {
        return $this->belongsTo(related: Minister::class);
    }

    public function bureau()
    {
        return $this->belongsTo(Bureau::class);
    }
}
