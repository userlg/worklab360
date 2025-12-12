<?php

namespace App\Observers;

use App\Jobs\SendWelcomeMessage;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        if ($user->email_verified_at != $user->getOriginal('email_verified_at')) {
            SendWelcomeMessage::dispatch($user->email, $user->name);
        }
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void {}
}
