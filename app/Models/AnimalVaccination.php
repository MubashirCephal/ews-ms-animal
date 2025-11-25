<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalVaccination extends Model
{
    protected $fillable = [
        'animal_id',
        'vaccination_id',
        'vaccination_date',
        'due_date',
        'is_done',
        'facility_id',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    public $casts = [];
}
