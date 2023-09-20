<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class Gallery extends Model
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
     * One post for several galleries
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * ONE-TO-MANY
     * One project for several galleries
     */
    public function project()
    {
        return $this->belongsTo(Projet::class);
    }
}
