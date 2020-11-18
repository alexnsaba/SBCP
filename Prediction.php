<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    //
    protected $fillable = ['Results', 'Clinical_notes','Patient_id','Doctor_id','region'];

}
