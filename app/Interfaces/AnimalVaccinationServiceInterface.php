<?php

namespace App\Interfaces;

/**
 */
interface AnimalVaccinationServiceInterface
{

    /**
     * @param \Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalVaccinations(
        \Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse;
    /**
     * @param \Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalVaccination(
        \Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse;

    /**
     * @param \Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateAnimalVaccination(
        \Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse;

    /**
     * @param \Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteAnimalVaccination(
        \Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse;

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
}
