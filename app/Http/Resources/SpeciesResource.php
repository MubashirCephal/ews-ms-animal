<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\SpeciesService\Species;
use Proto\SpeciesService\TemplateSpecies;

class SpeciesResource extends JsonResource
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
    public function dto(){
        return [
            'species' => new TemplateSpecies($this->except('created_at', 'updated_at')),
            'response_code' => 200,
        ];
    }
}
