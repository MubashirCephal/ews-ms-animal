<?php

namespace App\Interfaces;

interface BreedServiceInterface {

    /**
     * @param \Proto\BreedService\GetBreedsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\GetBreedsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetBreeds(
        \Proto\BreedService\GetBreedsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\GetBreedsResponse ;

    /**
     * @param \Proto\BreedService\GetBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\GetBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetBreed(
        \Proto\BreedService\GetBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\GetBreedResponse ;

    /**
     * @param \Proto\BreedService\CreateBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\CreateBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateBreed(
        \Proto\BreedService\CreateBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\CreateBreedResponse ;

    /**
     * @param \Proto\BreedService\UpdateBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\UpdateBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateBreed(
        \Proto\BreedService\UpdateBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\UpdateBreedResponse ;

    /**
     * @param \Proto\BreedService\DeleteBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\DeleteBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteBreed(
        \Proto\BreedService\DeleteBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\DeleteBreedResponse ;

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
}
