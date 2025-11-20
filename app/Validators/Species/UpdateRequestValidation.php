<?php

namespace App\Validators\Species;

use App\Classes\GrpcValidator;

class UpdateRequestValidation extends GrpcValidator {

    static function rules(): array {
        
        return [
            'id' => 'required|exists:species,id',
            'name' => 'required|string',
            'scientific_name' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ];
    }

}
 