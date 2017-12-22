<?php

namespace Kerozn\Modules\Contact\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Kerozn\Modules\Contact\Events\ContactRequestWasCreated;
use Kerozn\Modules\Contact\Listeners\SendContactRequestNotification;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ContactRequestWasCreated::class => [
            SendContactRequestNotification::class,
        ],
    ];
}