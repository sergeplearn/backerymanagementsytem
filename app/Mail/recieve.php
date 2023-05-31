<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class recieve extends Mailable
{
    use Queueable, SerializesModels;
public $user;
    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
      $this->user = $user;
    }

    
    public function build()
    {
      
        return $this->view('mail.recieve');
    }

    
}
