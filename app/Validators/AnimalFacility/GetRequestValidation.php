<?php

namespace App\Validators\AnimalFacility;

use App\Classes\GrpcValidator;

class GetRequestValidation extends GrpcValidator {

    static function rules(): array {
        return [
           'id' => 'required|integer|exists:animal_facilities,id'
        ];
    }
}
