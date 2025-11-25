<?php

namespace App\Validators\AnimalVaccination;

use App\Classes\GrpcValidator;

class UpdateRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'id'=>'required|integer|exists:animal_vaccinations,id',
            'vaccination_id'=>'required|integer',
            'vaccination_date'=>'required|string',
            'due_date'=>'required|string',
            'administered_by'=>'nullable|string',
            'notes'=>'nullable|string',
            'animal_id' => 'required|integer|exists:animals,id',
            'facility_id' => 'required|integer',
        ];
    }
}
