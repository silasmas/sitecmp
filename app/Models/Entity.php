<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Entity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * ONE-TO-MANY
     * One minister for several entities
     */
    public function minister()
    {
        return $this->belongsTo(Minister::class);
    }

    /**
     * MANY-TO-ONE
     * Several programs for an entity
     */
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
