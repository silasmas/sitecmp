<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Entity extends Model
{
    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    public $translatable = ["designation","titulaire","adresse","image_url","contact"];

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
