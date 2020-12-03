<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    public function patient()
    {
        return $this->hasMany('App\Patient');
    }

}
