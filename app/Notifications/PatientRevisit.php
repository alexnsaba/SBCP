<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PatientRevisit extends Notification
{
    use Queueable;
//    private $patientData;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->patientData = $patientData;

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

//        return (new MailMessage)
//            ->name($this->patientData['name'])
//            ->line($this->patientData['body'])
//            ->action($this->patientData['offerText'], $this->patientData['offerUrl'])
//            ->line($this->patientData['thanks']);
        // This will be sent in mail notification
        return (new MailMessage)
            ->line("Congrats, You have successfully registered on another website. If you can't find login link then
                                please click on the big damn button we tailored for you!")
            ->from('kalemarnld@gmail.com', 'Sender')

            ->action('Login Now', url('/login'))
            ->line('Thank you for using our application!');

    }
    public function toDatabase($notifiable) {
        // This will be stored in Database, You'll fetch this notification later to display in application
        return [
            'body' => 'Yaay! You made it to here! You logged in to view the notification, SO damn Nice!',
        ];
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
//            'patient_id' => $this->patientData['patient_id']
        ];
    }
}
