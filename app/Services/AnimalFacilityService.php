<?php

namespace App\Services;

    
use App\Models\AnimalFacility;
use App\Interfaces\AnimalFacilityServiceInterface;
use App\Validators\AnimalFacility\CreateRequestValidation;
use App\Validators\AnimalFacility\DeleteRequestValidation;
use App\Validators\AnimalFacility\GetRequestValidation;
use App\Validators\AnimalFacility\UpdateRequestValidation;

use Grpc\ServerContext;
use Proto\AnimalFacilityService\TemplateAnimalFacility;

use Proto\AnimalFacilityService\GetAnimalFacilityRequest;
use Proto\AnimalFacilityService\CreateAnimalFacilityRequest;
use Proto\AnimalFacilityService\CreateAnimalFacilityResponse;
use Proto\AnimalFacilityService\DeleteAnimalFacilityRequest;
use Proto\AnimalFacilityService\DeleteAnimalFacilityResponse;
use Proto\AnimalFacilityService\GetAnimalFacilityResponse;
use Proto\AnimalFacilityService\GetAnimalFacilitiesRequest;
use Proto\AnimalFacilityService\GetAnimalFacilitiesResponse;
use Proto\AnimalFacilityService\UpdateAnimalFacilityRequest;
use Proto\AnimalFacilityService\UpdateAnimalFacilityResponse;

class AnimalFacilityService implements AnimalFacilityServiceInterface {


    public function GetAnimalFacilities(GetAnimalFacilitiesRequest $request, ServerContext $context): ?GetAnimalFacilitiesResponse {
        $validated = GetRequestValidation::validate($request);
        $animalFacilities = AnimalFacility::where('animal_id',$validated['animal_id'])->get();
        
        return new GetAnimalFacilitiesResponse([
            'animal_facilities' => $this->repeated($animalFacilities),
            'response_code' => 200
        ]);
        
        throw new \Exception('Not implemented');
    }

    public function CreateAnimalFacility(CreateAnimalFacilityRequest $request, ServerContext $context): ?CreateAnimalFacilityResponse {
        $validated = CreateRequestValidation::validate($request);
        $animalFacility = AnimalFacility::create($validated);
        return new CreateAnimalFacilityResponse($animalFacility->toResource()->dto(201));

        throw new \Exception('Not implemented');
    }


    protected function repeated($items) : array {
        $repeated = [];

        foreach ($items as $item){
            $repeated = [...$repeated, $item->toResource()->dto()['animal_facility']];
        }

        return $repeated;
    }

}