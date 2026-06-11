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
        $admins = User::permission('access.admin.panel')->get();

        foreach ($admins as $admin) {
            $admin->notify(
                new NewUserRegisteredNotification($event->user)
            );
        }
    }
}
