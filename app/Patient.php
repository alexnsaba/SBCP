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
        return $this->belongsTo('App\User');
    }
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
    public function reminder()
    {
        return $this->hasMany('App\Reminder');
    }

}
