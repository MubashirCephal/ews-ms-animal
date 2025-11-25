<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\AnimalVaccinationService\TemplateAnimalVaccination;

class AnimalVaccinationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }

    public function dto(?int $responseCode = 200) : array {
        return [
            'animal_vaccination' => new TemplateAnimalVaccination($this->except('created_at', 'updated_at')),
            'response_code' => $responseCode
        ];
    }
}
