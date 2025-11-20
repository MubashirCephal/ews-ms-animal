<?php

namespace App\Validators\Animal;

use App\Classes\GrpcValidator;

class GetRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'id' => 'required|exists:animals,id',
        ];
    }
}
