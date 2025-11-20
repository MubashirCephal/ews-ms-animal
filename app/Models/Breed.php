<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = [
        'name',
        'species_id',
        'lifespan',
        'description',
        'status',
        'can_create_batch'
    ];
    public function species()
    {
        return $this->belongsTo(Species::class);
    }
    protected $casts = [
        'lifespan' => 'integer',
        'status' => 'boolean',
    ];
}
