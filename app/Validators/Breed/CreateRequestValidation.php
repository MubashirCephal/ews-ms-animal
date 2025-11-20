<?php

namespace App\Validators\Breed;

use App\Classes\GrpcValidator;

class CreateRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'name' => 'required|string',
            'species_id' => 'required|exists:species,id',
            'lifespan' => 'nullable|integer',
            'can_create_batch' => 'boolean',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ];
    }
}
