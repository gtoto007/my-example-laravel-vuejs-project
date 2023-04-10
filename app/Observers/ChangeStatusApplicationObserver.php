<?php

namespace App\Observers;

use App\Events\ApplicationExamined;
use App\Models\Application;
use App\Models\Status;

class ChangeStatusApplicationObserver
{
    public $afterCommit = true;

    /**
     * Handle the Application "updated" event.
     */
    public function updated(Application $application): void
    {
        if ($application->wasChanged('status') && $application->status != Status::Pendente) {
            ApplicationExamined::dispatch($application);
        }
    }
}
