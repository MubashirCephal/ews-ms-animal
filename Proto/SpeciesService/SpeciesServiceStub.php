<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\SpeciesService;

/**
 */
class SpeciesServiceStub {

    /**
     * @param \Proto\SpeciesService\GetSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\GetSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetSpecies(
        \Proto\SpeciesService\GetSpeciesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\GetSpeciesResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\SpeciesService\GetSpeciesByIdRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\GetSpeciesByIdResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetSpeciesById(
        \Proto\SpeciesService\GetSpeciesByIdRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\GetSpeciesByIdResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\SpeciesService\CreateSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\CreateSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateSpecies(
        \Proto\SpeciesService\CreateSpeciesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\CreateSpeciesResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\SpeciesService\UpdateSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\UpdateSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateSpecies(
        \Proto\SpeciesService\UpdateSpeciesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\UpdateSpeciesResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\SpeciesService\DeleteSpeciesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\SpeciesService\DeleteSpeciesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteSpecies(
        \Proto\SpeciesService\DeleteSpeciesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\SpeciesService\DeleteSpeciesResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/SpeciesServicePackage.SpeciesService/GetSpecies' => new \Grpc\MethodDescriptor(
                $this,
                'GetSpecies',
                '\Proto\SpeciesService\GetSpeciesRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/SpeciesServicePackage.SpeciesService/GetSpeciesById' => new \Grpc\MethodDescriptor(
                $this,
                'GetSpeciesById',
                '\Proto\SpeciesService\GetSpeciesByIdRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/SpeciesServicePackage.SpeciesService/CreateSpecies' => new \Grpc\MethodDescriptor(
                $this,
                'CreateSpecies',
                '\Proto\SpeciesService\CreateSpeciesRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/SpeciesServicePackage.SpeciesService/UpdateSpecies' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateSpecies',
                '\Proto\SpeciesService\UpdateSpeciesRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/SpeciesServicePackage.SpeciesService/DeleteSpecies' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteSpecies',
                '\Proto\SpeciesService\DeleteSpeciesRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
