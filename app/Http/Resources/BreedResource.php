<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\BreedService\TemplateBreed;
use Proto\BreedService\TemplateSpecies;

class BreedResource extends JsonResource
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
        $data['species'] = new TemplateSpecies($this->species->except('created_at', 'updated_at'));
        return [
            'breed' => new TemplateBreed($data),
            'response_code' => 200,
        ];
    }
}
