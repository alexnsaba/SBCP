<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PatientRevisit extends Notification
{
    use Queueable;
    private $patientData;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($patientData)
    {
        $this->patientData = $patientData;

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
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
//        return (new MailMessage)
//                    ->line('The introduction to the notification.')
//                    ->action('Notification Action', url('/'))
//                    ->line('Thank you for using our application!');

        return (new MailMessage)
            ->name($this->patientData['name'])
            ->line($this->patientData['body'])
            ->action($this->patientData['offerText'], $this->patientData['offerUrl'])
            ->line($this->patientData['thanks']);

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
            'patient_id' => $this->patientData['patient_id']
        ];
    }
}
