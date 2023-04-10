<?php

namespace App\Listeners;

use App\Events\ApplicationExamined;
use App\Notifications\ApplicationResult;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendApplicationExaminedNotification implements ShouldQueue
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
    public function handle(ApplicationExamined $event): void
    {
        $event->application->notify(new ApplicationResult($event->application));
    }
}
