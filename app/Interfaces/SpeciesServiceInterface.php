<?php

namespace App\Interfaces;

interface SpeciesServiceInterface {

    /**
     * @param \Proto\SpeciesService\GetSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\GetSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetSpecies(
        \Proto\SpeciesService\GetSpeciesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\GetSpeciesResponse ;

    /**
     * @param \Proto\SpeciesService\GetSpeciesByIdRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\GetSpeciesByIdResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetSpeciesById(
        \Proto\SpeciesService\GetSpeciesByIdRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\GetSpeciesByIdResponse ;

    /**
     * @param \Proto\SpeciesService\CreateSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\CreateSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateSpecies(
        \Proto\SpeciesService\CreateSpeciesRequest $request,
    \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\CreateSpeciesResponse ;

    /**
     * @param \Proto\SpeciesService\UpdateSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\UpdateSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateSpecies(
        \Proto\SpeciesService\UpdateSpeciesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\UpdateSpeciesResponse ;

    /**
     * @param \Proto\SpeciesService\DeleteSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\DeleteSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteSpecies(
        \Proto\SpeciesService\DeleteSpeciesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\DeleteSpeciesResponse ;

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */

}
