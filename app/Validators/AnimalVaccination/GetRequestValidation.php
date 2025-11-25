<?php

namespace App\Validators\AnimalVaccination;

use App\Classes\GrpcValidator;

class GetRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'id' => 'required|integer|exists:animal_vaccinations,id',
        ];
    }
}
