<?php

namespace App\Validators\AnimalPostmortem;

use App\Classes\GrpcValidator;

class GetRequestValidation extends GrpcValidator {

    static function rules(): array {
        return [
           'animal_id' => 'required|integer|exists:animals,id'
        ];
    }
}
