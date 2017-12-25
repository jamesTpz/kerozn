<?php

namespace Kerozn\Modules\Contact\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;
use Kerozn\Modules\Contact\Emails\ContactRequestNotification;
use Kerozn\Modules\Contact\Events\ContactRequestWasCreated;
class SendContactRequestNotification
{
    /**
     * @var Mailer
     */
    private $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
		$email = env('MAIL_TO_ADMIN') ?: setting('contact.email');
        $this->mailer->to($email)->queue(new ContactRequestNotification($event->contactRequest));
    }
}
