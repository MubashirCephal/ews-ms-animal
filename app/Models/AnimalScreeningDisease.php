<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalScreeningDisease extends Model
{
    protected $fillable = [
        'animal_screening_id',
        'disease_id',
    ];
    public function animalScreening()
    {
        return $this->belongsTo(AnimalScreening::class);
    }
}
