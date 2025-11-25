<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalPostmortemDetail extends Model
{
    protected $fillable = [
        'animal_id',
        'comments',
        'examined_organ',
        'observation',
        'carcass_condemnation',
        'animal_postmortem_id'
    ];
    public $casts = [];
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    public function animalPostmortem()
    {
        return $this->belongsTo(AnimalPostmortem::class);
    }
}
