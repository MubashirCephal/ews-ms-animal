<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalScreening extends Model
{
    protected $fillable = [
        'animal_id',
        'screening_result',
        'remarks'
    ];
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    public function animal_screening_diseases()
    {
        return $this->hasMany(AnimalScreeningDisease::class);
    }
    public function animal_screening_symptoms()
    {
        return $this->hasMany(AnimalScreeningSymptom::class);
    }
    public $casts = [];
}
