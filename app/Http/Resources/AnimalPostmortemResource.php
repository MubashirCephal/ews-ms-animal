<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\AnimalPostmortemService\TemplateAnimalPostmortem;
use Proto\AnimalPostmortemService\TemplateAnimalPostmortemDetail;

class AnimalPostmortemResource extends JsonResource
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

    public function dto(?int $responseCode = 200): array
    {
        $data = $this->except('created_at', 'updated_at');
        $data['detail'] = new TemplateAnimalPostmortemDetail($this->details->except('created_at', 'updated_at'));
        return [
            'animal_postmortem' => new TemplateAnimalPostmortem($data),
            'response_code' => $responseCode
        ];
    }
}
