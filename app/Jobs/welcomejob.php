<?php

namespace App\Jobs;

use App\Mail\welcomemail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class welcomejob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $detailse;

    /**
     * Create a new job instance.
     */
    public function __construct($detailse)
    {
        $this->detailse = $detailse;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $email = new welcomemail();
        Mail::to('divino@gmail.com')->send($email);
    }
}
