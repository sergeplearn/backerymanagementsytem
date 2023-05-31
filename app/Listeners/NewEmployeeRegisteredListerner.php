<?php

namespace App\Listeners;

use App\Events\NewEmployeeRegisteredEvent;
use App\Mail\recieve;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\employee;
use Mail;
class NewEmployeeRegisteredListerner
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
    public function handle(NewEmployeeRegisteredEvent $event): void
    {
        $user =  employee::find($event->employee);
    
        Mail::to('serge@gmail.com')->send(new recieve($user));
    }
}
