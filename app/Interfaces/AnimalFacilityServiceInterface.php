<?php

namespace App\Interfaces;

interface AnimalFacilityServiceInterface
{
    /**
     * @param \Proto\AnimalFacilityService\GetAnimalFacilitiesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalFacilityService\GetAnimalFacilitiesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalFacilities(
        \Proto\AnimalFacilityService\GetAnimalFacilitiesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalFacilityService\GetAnimalFacilitiesResponse;


    /**
     * @param \Proto\AnimalFacilityService\CreateAnimalFacilityRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalFacilityService\CreateAnimalFacilityResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalFacility(
        \Proto\AnimalFacilityService\CreateAnimalFacilityRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalFacilityService\CreateAnimalFacilityResponse;
}
