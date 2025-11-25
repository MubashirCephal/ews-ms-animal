<?php

namespace App\Validators\AnimalPostmortem;

use App\Classes\GrpcValidator;

class DeleteRequestValidation extends GrpcValidator {

    static function rules(): array {
        return [
           'id' => 'required|integer|exists:animal_postmortems,id'
        ];
    }
    
}
