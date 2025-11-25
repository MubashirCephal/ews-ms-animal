<?php

namespace App\Validators\AnimalScreening;

use App\Classes\GrpcValidator;

class CreateRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'animal_id' => 'required|integer|exists:animals,id',
            'screening_result' => 'nullable|string|in:pass,fail,partial',
            'remarks' => 'nullable|string',
            'disease_ids' => 'nullable|array',
            'symptom_ids' => 'nullable|array',
        ];
    }
}
