<?php

namespace App\Broadcasting;

use App\Models\User;

class WelcomeChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(User $user): array|bool
    {
        return true; // allow all users to join the channel
    }
}
