<?php

namespace Kerozn\Modules\Contact\Events;

use Illuminate\Queue\SerializesModels;
use Kerozn\Modules\Contact\Entities\ContactRequest;

class ContactRequestWasCreated
{
    use SerializesModels;

    /**
     * Create a new event instance.
     * @var ContactRequest
     * @return void
     */
    public function __construct(ContactRequest $contactRequest)
    {
        $this->contactRequest = $contactRequest;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
