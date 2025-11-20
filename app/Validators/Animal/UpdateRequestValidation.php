<?php

namespace App\Validators\Animal;

use App\Classes\GrpcValidator;

class UpdateRequestValidation extends GrpcValidator
{

    static function rules(): array
    {
        return [
            'facility_id' => ['required'],
            'registration_type' => ['required', 'in:individual,batch'],
            'owner_id' => ['required'],
            'country_id' => ['required'],
            'species_id' => ['required', 'exists:species,id'],
            'breed_id' => ['required', 'exists:breeds,id'],
            'scientific_name' => ['required_if:registration_type,individual', 'string', 'max:255'],
            'identification' => ['required', 'in:RFID,branding,ear_tag,shafts,microchip,SITES,plastic_numbers'],
            'age' => ['required', 'numeric', 'between:0,999'],
            'number_of_males' => ['required_if:registration_type,batch', 'numeric'],
            'number_of_females' => ['required_if:registration_type,batch', 'numeric'],
            'total_number' => ['required_if:registration_type,batch', 'numeric'],
            'unit' => ['nullable', 'in:tons,kilogram,head,unit,cell'],
            'unit_value' => ['nullable', 'numeric'],
            'sex' => ['required_if:registration_type,individual', 'in:female,male'],
            'pedigree' => ['required_if:registration_type,individual', 'string', 'max:255'],
            'nickname' => ['required_if:registration_type,individual', 'string', 'max:255'],
            'branding' => ['required_if:registration_type,individual', 'string', 'max:255'],
            'ear_tag' => ['required_if:registration_type,individual', 'string', 'max:255'],
            'rfid' => ['required_if:registration_type,individual', 'string', 'max:255'],
            'microchip' => ['required_if:registration_type,individual', 'string', 'max:255'],
            'status' => ['required', 'in:alive,deceased'],
            'is_exotic' => [ 'boolean'],
            // 'vaccination' => ['required', 'array'],
            // 'vaccination.*.id' => ['required', 'exists:vaccinations,id'],
            // 'vaccination.*.date' => ['required', 'date'],
            'source' => ['string', 'max:255'],
            'remarks' => ['string', 'max:255'],
            'files' => ['nullable', 'array'],
            'files.*' => ['nullable', 'file', 'mimes:pdf,jpeg,png', 'max:5120'],
            'weqaa_record_id' => ['nullable'],
            'province_id' => ['nullable'],
            'area' => ['nullable'],
            'service_id' => ['nullable'],
            'id' => 'required|exists:animals,id',
        ];
    }
}
