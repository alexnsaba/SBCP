<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public function prediction()
    {
        return $this->hasMany('App\Prediction');
    }
    public function patient()
    {
        return $this->hasMany('App\Patient');
    }
}
