<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendmail extends Mailable
{
    use Queueable, SerializesModels;
    public $employee;
    public $money;
    public $expense;
    public $itemsupplieds;
    public $housesalary;
    public $regemploysals;


    /**
     * Create a new message instance.
     */
    public function __construct( $employee,$money,$expense,$itemsupplieds,$housesalary,$regemploysals)
    {
        $this->employee = $employee;
        $this->money = $money;
        $this->expense = $expense;
        $this->itemsupplieds = $itemsupplieds;
        $this->housesalary = $housesalary;
        $this->regemploysals = $regemploysals;
    }

   

   

    public function build()
    {
        return $this->subject('todays report from bakery')
                    ->view('mail.sendmail');
    }
   
}
