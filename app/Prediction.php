<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Prediction extends Model
{

    //
    protected $fillable = ['Results', 'Clinical_notes','Patient_id','Doctor_id','region'];

    use Notifiable;
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'predictions.results' => 10,
            'predictions.clinical_notes' => 10,
            'predictions.region' => 10,
        ]
    ];
    public function doctor()
    {
        return $this->hasOne('App\Prediction');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function patient(){
        return $this->belongsTo('App\Patient');
    }

}
