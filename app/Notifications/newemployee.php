<?php

namespace App\Notifications;

use App\Models\employee;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newemployee extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public employee $employee)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                   // ->line('The introduction to the notification.')
                    //->action('Notification Action', url('/'))
            ->subject("New breadseller {$this->employee->fname}")
            ->greeting('Thank you for using our application!')
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
