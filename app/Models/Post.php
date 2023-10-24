<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Post extends Model
{
    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    public $translatable = ["title","image_url","body","references","fichier_url","observation"];

    /**
     * ONE-TO-MANY
     * One event for several posts
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * ONE-TO-MANY
     * One minister for several posts
     */
    public function minister()
    {
        return $this->belongsTo(Minister::class);
    }

    /**
     * MANY-TO-ONE
     * Several galleries for a post
     */
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
