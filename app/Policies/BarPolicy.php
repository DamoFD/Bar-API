<?php

namespace App\Policies;

use App\Models\Bar;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Bar $bar): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Bar $bar): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Bar $bar): bool
    {
        return $user->id === $bar->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Bar $bar): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Bar $bar): bool
    {
        //
    }
}
