<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Translatable\HasTranslations;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use BezhanSalleh\FilamentShield\Support\Utils;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class User extends Authenticatable implements FilamentUser
{
    use HasTranslations, HasRoles, HasPanelShield;
    use HasApiTokens, HasFactory, Notifiable;
    public $translatable = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Accès Filament : rôles Shield (super_admin, panel_user) ou au moins un rôle sur la pivot user_roles.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        if (Utils::isSuperAdminEnabled() && $this->hasRole(Utils::getSuperAdminName())) {
            return true;
        }

        if (Utils::isPanelUserRoleEnabled() && $this->hasRole(Utils::getPanelUserRoleName())) {
            return true;
        }

        return $this->roles()->exists();
    }

    /**
     * MANY-TO-MANY
     * Several users for several roles
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
}
