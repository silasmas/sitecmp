<?php

namespace App\Policies;

use App\Models\User;
use App\Models\reception_schedule;
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
    public function view(User $user, reception_schedule $receptionSchedule): bool
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
    public function update(User $user, reception_schedule $receptionSchedule): bool
    {
       return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, reception_schedule $receptionSchedule): bool
    {
       return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, reception_schedule $receptionSchedule): bool
    {
       return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, reception_schedule $receptionSchedule): bool
    {
       return true;
    }
}
