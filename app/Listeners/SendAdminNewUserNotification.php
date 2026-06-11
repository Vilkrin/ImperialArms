<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Notifications\NewUserRegisteredNotification;

class SendAdminNewUserNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $recipients = User::permission('receive.user.registration.notifications')->get();

        foreach ($recipients as $recipient) {
            $recipient->notify(
                new NewUserRegisteredNotification($event->user)
            );
        }
    }
}
