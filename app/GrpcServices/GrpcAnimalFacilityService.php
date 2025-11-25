<?php

namespace App\GrpcServices;

use App\Services\AnimalFacilityService;
use Proto\AnimalFacilityService\AnimalFacilityServiceStub;

use Grpc\ServerContext;
use Proto\AnimalFacilityService\CreateAnimalFacilityRequest;
use Proto\AnimalFacilityService\CreateAnimalFacilityResponse;
use Proto\AnimalFacilityService\GetAnimalFacilitiesRequest;
use Proto\AnimalFacilityService\GetAnimalFacilitiesResponse;

class GrpcAnimalFacilityService extends AnimalFacilityServiceStub
{
    public $AnimalFacilityService;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->AnimalFacilityService = new AnimalFacilityService();
    }

    public function GetAnimalFacilities(GetAnimalFacilitiesRequest $request, ServerContext $context): ?GetAnimalFacilitiesResponse
    {
        return $this->AnimalFacilityService->GetAnimalFacilities($request, $context);
    }

    public function CreateAnimalFacility(CreateAnimalFacilityRequest $request, ServerContext $context): ?CreateAnimalFacilityResponse
    {
        return $this->AnimalFacilityService->CreateAnimalFacility($request, $context);
    }
}
