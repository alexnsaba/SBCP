<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Revisit extends Notification
{
    use Queueable;


    private $reminder;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reminder)
    {
        $this->reminder = $reminder;
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello '.$this->reminder->patient->Name)
            ->subject('Reminder on Next Check Up')
            ->line('We are reminding you to come back for the next check up on '.date('d-m-Y', strtotime($this->reminder->reminder_date)))
            ->line('Message: '.$this->reminder->data)
            ->line('Thank you for working with us');
//        ->markdown('email.reminder', ['reminder' => $this->reminder]);

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
