<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'weqaa_record_id',
        'owner_id',
        'facility_id',
        'species_id',
        'breed_id',
        'registration_type',
        'age',
        'sex',
        'status',
        'remarks',
        'country_id',
        'province_id',
        'area',
        'nickname',
        'scientific_name',
        'identification',
        'rfid',
        'branding',
        'ear_tag',
        'microchip',
        'pedigree',
        'is_exotic',
        'number_of_males',
        'number_of_females',
        'total_number',
        'unit',
        'unit_value',
        'service_id',
        'is_consignment_approved'
    ];
    public $casts = [
        'age' => 'integer',
        'is_exotic' => 'boolean',
    ];
}
