<?php

namespace App\Validators\Breed;

use App\Classes\GrpcValidator;

class GetRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'id'=> 'required|integer|exists:breeds,id',
        ];
    }
}
