<?php

namespace App\Policies;

use App\Models\User;
use App\Models\artist;

class ArtistPolicy
{
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, artist $artist): bool
    {
        return $user->id === $artist->user_id;
    }
}
