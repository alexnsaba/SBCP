<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reminder extends Model
{
    use Notifiable;




    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function routeNotificationForMail($notification)
    {

        // Return email address and name...
        return [$this->patient->Email => $this->patient->Name];
    }
}
