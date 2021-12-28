<?php

namespace App\Listeners;

use App\Events\UserHasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendUserAnEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function welcome(UserHasRegistered $event)
    {
        echo 'Sending email to user ' . $event->name . ' is under processing.';
        return;
    }
}
