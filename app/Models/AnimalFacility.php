<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalFacility extends Model
{
    protected $fillable = ['animal_id', 'facility_id'];
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    public $casts = [];
}
