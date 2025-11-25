<?php

namespace App\Validators\AnimalScreening;

use App\Classes\GrpcValidator;

class UpdateRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'id' => 'required|integer|exists:animal_screenings,id',
            'animal_id' => 'required|integer|exists:animals,id',
            'screening_result' => 'nullable|string',
            'remarks' => 'nullable|string',
            'symptom_ids' => 'nullable|array',
            'disease_ids' => 'nullable|array',
        ];
    }
}
