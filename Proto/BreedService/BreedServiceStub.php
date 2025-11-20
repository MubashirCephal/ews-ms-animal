<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\BreedService;

/**
 */
class BreedServiceStub {

    /**
     * @param \Proto\BreedService\GetBreedsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\GetBreedsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetBreeds(
        \Proto\BreedService\GetBreedsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\GetBreedsResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\BreedService\GetBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\GetBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetBreed(
        \Proto\BreedService\GetBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\GetBreedResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\BreedService\CreateBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\CreateBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateBreed(
        \Proto\BreedService\CreateBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\CreateBreedResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\BreedService\UpdateBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\UpdateBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateBreed(
        \Proto\BreedService\UpdateBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\UpdateBreedResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\BreedService\DeleteBreedRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\BreedService\DeleteBreedResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteBreed(
        \Proto\BreedService\DeleteBreedRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\BreedService\DeleteBreedResponse {
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
            '/BreedServicePackage.BreedService/GetBreeds' => new \Grpc\MethodDescriptor(
                $this,
                'GetBreeds',
                '\Proto\BreedService\GetBreedsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/BreedServicePackage.BreedService/GetBreed' => new \Grpc\MethodDescriptor(
                $this,
                'GetBreed',
                '\Proto\BreedService\GetBreedRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/BreedServicePackage.BreedService/CreateBreed' => new \Grpc\MethodDescriptor(
                $this,
                'CreateBreed',
                '\Proto\BreedService\CreateBreedRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/BreedServicePackage.BreedService/UpdateBreed' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateBreed',
                '\Proto\BreedService\UpdateBreedRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/BreedServicePackage.BreedService/DeleteBreed' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteBreed',
                '\Proto\BreedService\DeleteBreedRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
