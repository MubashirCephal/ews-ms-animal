<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $fillable = [
        'name',
        'scientific_name',
        'description',
        'status',
    ];
    protected $casts = [
        'status' => 'boolean',
    ];
}
