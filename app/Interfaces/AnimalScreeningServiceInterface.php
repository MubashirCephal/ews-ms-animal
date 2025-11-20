<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Interfaces;

/**
 */
interface AnimalScreeningServiceInterface
{

    /**
     * @param \Proto\AnimalScreeningService\GetAnimalScreeningsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\GetAnimalScreeningsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalScreenings(
        \Proto\AnimalScreeningService\GetAnimalScreeningsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\GetAnimalScreeningsResponse;

    /**
     * @param \Proto\AnimalScreeningService\CreateAnimalScreeningRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\CreateAnimalScreeningResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalScreening(
        \Proto\AnimalScreeningService\CreateAnimalScreeningRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\CreateAnimalScreeningResponse;
    /**
     * @param \Proto\AnimalScreeningService\UpdateAnimalScreeningRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\UpdateAnimalScreeningResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateAnimalScreening(
        \Proto\AnimalScreeningService\UpdateAnimalScreeningRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\UpdateAnimalScreeningResponse;

    /**
     * @param \Proto\AnimalScreeningService\DeleteAnimalScreeningRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\DeleteAnimalScreeningResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteAnimalScreening(
        \Proto\AnimalScreeningService\DeleteAnimalScreeningRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\DeleteAnimalScreeningResponse;

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
}
