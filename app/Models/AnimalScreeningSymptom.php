<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalScreeningSymptom extends Model
{
    protected $fillable = [
        'animal_screening_id',
        'symptom_id',
    ];
    public function animalScreening()
    {
        return $this->belongsTo(AnimalScreening::class);
    }
}
