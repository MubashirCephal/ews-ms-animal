<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\AnimalFacilityService\TemplateAnimal;
use Proto\AnimalFacilityService\TemplateAnimalFacility;

class AnimalFacilityResource extends JsonResource
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
        
        $data = $this->except('created_at', 'updated_at');
        $data['animal'] = new TemplateAnimal($this->animal->except('created_at', 'updated_at'));
        return [
            'animal_facility' => new TemplateAnimalFacility($data),
            'response_code' => $responseCode
        ];
    }
}
