<?php

namespace App\Validators\Species;

use App\Classes\GrpcValidator;

class GrpcCreateSpeciesRequestValidation extends GrpcValidator {

    static function rules(): array {
        return [
            'name' => 'required|string',
            'scientific_name' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ];
    }

}
 