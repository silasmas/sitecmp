<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ReceptionSchedule;
use Illuminate\Auth\Access\Response;

class ReceptionSchedulePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
       return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ReceptionSchedule $receptionSchedule): bool
    {
       return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
       return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ReceptionSchedule $receptionSchedule): bool
    {
       return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ReceptionSchedule $receptionSchedule): bool
    {
       return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ReceptionSchedule $receptionSchedule): bool
    {
       return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ReceptionSchedule $receptionSchedule): bool
    {
       return true;
    }
}
