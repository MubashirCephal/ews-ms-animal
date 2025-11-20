<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalFile extends Model
{
    protected $fillable = [
        'animal_id',
        'filename',
    ];
}
