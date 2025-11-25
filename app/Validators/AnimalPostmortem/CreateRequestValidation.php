<?php

namespace App\Validators\AnimalPostmortem;

use App\Classes\GrpcValidator;
use App\Enums\ExaminedOrgan;
use App\Enums\Observation;
use Illuminate\Validation\Rule;

class CreateRequestValidation extends GrpcValidator {

    static function rules(): array {
        return [
            'date_of_post_mortem'=>'required',
            'no_of_animals_screened'=>'required|integer',
            'no_of_animals_organs_collected'=>'required|integer',
            'details'=>'required|array',
            'details.*.animal_id'=>'required|integer|exists:animals,id',
            'details.*.comments'=>'required|string',
            'details.*.examined_organ'=>['required','string',Rule::enum(ExaminedOrgan::class)],
            'details.*.observation'=>['required','string',Rule::enum(Observation::class)],
            'details.*.carcass_condemnation'=>['required','string','in:NA,Partial,Full'],

        ];
    }
    
}
