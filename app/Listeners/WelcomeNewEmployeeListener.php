<?php

namespace App\Listeners;

class WelcomeNewEmployeeListener
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
        Mail::to($event->customer->email)->send(new WelcomeMail($event->customer));
    }
}
