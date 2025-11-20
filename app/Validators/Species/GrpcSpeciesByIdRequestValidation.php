<?php

namespace App\Validators\Species;

use App\Classes\GrpcValidator;

class GrpcSpeciesByIdRequestValidation extends GrpcValidator {

    static function rules(): array {
        return [
            'id' => 'required|exists:species,id',
        ];
    }

}
 