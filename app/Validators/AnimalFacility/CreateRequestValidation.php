<?php

namespace App\Validators\AnimalFacility;

use App\Classes\GrpcValidator;

class CreateRequestValidation extends GrpcValidator {

    static function rules(): array {
        return [
           'facility_id' => 'required|integer',
           'animal_id' => 'required|integer|exists:animals,id',
        ];
    }
    
}
