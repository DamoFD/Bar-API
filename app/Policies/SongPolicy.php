<?php

namespace App\Policies;

use App\Models\Song;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SongPolicy
{
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Song $song): bool
    {
        return $user->id === $song->user_id;
    }
}
