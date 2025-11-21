<?php

namespace App\Validators\Breed;

use App\Classes\GrpcValidator;

class UpdateRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'id' => 'required|integer|exists:breeds,id',
            'name' => 'required|string',
            'species_id' => 'required|exists:species,id',
            'lifespan' => 'nullable|integer',
            'can_create_batch' => 'boolean',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ];
    }
}
