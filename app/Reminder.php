<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    public function patient()
    {
        return $this->hasOne('App\Patient');
    }
}
