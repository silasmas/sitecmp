<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Minister extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * MANY-TO-ONE
     * Several posts for a minister
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * MANY-TO-ONE
     * Several entities for a minister
     */
    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
