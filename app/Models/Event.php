<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Event extends Model
{
    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    public $translatable = ["designation", "description", "lieu", "theme", "references", "image_url"];
    protected $casts = [
        'designation' => 'array', // Cast le champ translations en tableau
        'prix' => 'array', // Cast le champ translations en tableau
        'categorie' => 'array', // Cast le champ translations en tableau
        'monnaie' => 'array', // Cast le champ translations en tableau
    ];
    public function getLegalInfoTitle_title($lang = 'fr')
    {
        return $this->title[$lang] ?? null; // Retourne la description dans la langue demandée
    }
    /**
     * MANY-TO-ONE
     * Several posts for an event
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
