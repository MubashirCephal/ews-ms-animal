<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\AnimalService\Animal;
use Proto\AnimalService\TemplateAnimal;

class AnimalResource extends JsonResource
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
            'animal' => new TemplateAnimal($this->except('created_at', 'updated_at')),
            'response_code' => 200,
        ];
    }   
}
