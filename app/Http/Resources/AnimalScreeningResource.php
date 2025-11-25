<?php

namespace App\Http\Resources;

use App\Models\AnimalScreeningDisease;
use App\Models\AnimalScreeningSymptom;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\AnimalScreeningService\AnimalScreening;
use Proto\AnimalScreeningService\TemplateAnimalScreening;

class AnimalScreeningResource extends JsonResource
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
    public function dto()
    {
        $data = $this->except('created_at', 'updated_at');

        $data['disease_ids'] = AnimalScreeningDisease::where('animal_screening_id', $this->id)->pluck('disease_id')->toArray();
        $data['symptom_ids'] = AnimalScreeningSymptom::where('animal_screening_id', $this->id)->pluck('symptom_id')->toArray();
        return [
            'animal_screening' => new TemplateAnimalScreening($data),
            'response_code' => 200,
        ];
    }
}
