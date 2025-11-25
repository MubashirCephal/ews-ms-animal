<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalPostmortem extends Model
{
    protected $fillable = [
        'date_of_post_mortem',
        'no_of_animals_screened',
        'no_of_animals_organs_collected'
    ];
    public $casts = ['date_of_post_mortem'=>'date'];
    public function details()
    {
        return $this->hasMany(AnimalPostmortemDetail::class); 
    }
}
