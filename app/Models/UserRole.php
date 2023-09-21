<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class UserRole extends Model
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
     * One user for several role_users
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * ONE-TO-MANY
     * One role for several role_users
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('role_id', '=', $this->getAttribute('role_id'));

        return $query;
    }
}
