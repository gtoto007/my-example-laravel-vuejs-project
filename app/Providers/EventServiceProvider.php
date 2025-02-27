<?php

namespace App\Providers;

use App\Events\ApplicationCreated;
use App\Events\ApplicationExamined;
use App\Listeners\SendApplicationCreatedNotification;
use App\Listeners\SendApplicationExaminedNotification;
use App\Models\Application;
use App\Observers\ChangeStatusApplicationObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        ApplicationExamined::class => [
            SendApplicationExaminedNotification::class,
        ],
        ApplicationCreated::class => [
            SendApplicationCreatedNotification::class,
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Application::observe(ChangeStatusApplicationObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
