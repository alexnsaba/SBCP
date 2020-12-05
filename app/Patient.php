<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    public function doctor()
    {
        return $this->hasOne('App\Doctor');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function Location()
    {
        return $this->hasOne('App\Location');
    }
    public function reminder()
    {
        return $this->hasMany('App\Reminder');
    }

}
