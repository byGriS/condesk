<?php

namespace App\Observers;

use Illuminate\Support\Str;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->api_token = Str::random(60);
    }
}
