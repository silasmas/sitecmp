<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Minister extends Model
{
    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    public $translatable = [];
    // protected $with = ['Post'];
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
