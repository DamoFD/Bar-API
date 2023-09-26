<?php

namespace App\Policies;

use App\Models\Bar;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarPolicy
{
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Bar $bar): bool
    {
        return $user->id === $bar->user_id;
    }
}
