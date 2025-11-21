<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalVaccination extends Model
{
    protected $fillable = [
        'animal_id',
        'vaccine_name',
        'vaccination_date',
        'next_due_date',
        'administered_by',
        'notes',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
