<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Prediction extends Model
{
    use Notifiable;
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'predictions.results' => 10,
            'predictions.clinical_notes' => 10,
            'predictions.region' => 10,
        ]
    ];
}
