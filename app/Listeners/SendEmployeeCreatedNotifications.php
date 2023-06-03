<?php

namespace App\Listeners;

use App\Events\employeecreate;

class SendEmployeeCreatedNotifications
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
    public function handle(employeecreate $event): void
    {
        //
    }
}
