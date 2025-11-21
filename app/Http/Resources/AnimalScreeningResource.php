<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Proto\AnimalScreeningService\AnimalScreening;

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
        return [
            'breed' => new AnimalScreening(),
            'response_code' => 200,
        ];
    }
}
