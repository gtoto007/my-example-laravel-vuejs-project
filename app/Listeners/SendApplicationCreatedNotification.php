<?php

namespace App\Listeners;

use App\Events\ApplicationCreated;
use App\Models\User;
use App\Notifications\NewApplication;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendApplicationCreatedNotification implements ShouldQueue
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
    public function handle(ApplicationCreated $event): void
    {
        foreach (User::Where('is_admin', true)->cursor() as $user) {
            $user->notify(new NewApplication($user,$event->application));
        }
    }
}
