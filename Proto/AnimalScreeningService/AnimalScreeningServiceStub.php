<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalScreeningService;

/**
 */
class AnimalScreeningServiceStub {

    /**
     * @param \Proto\AnimalScreeningService\GetAnimalScreeningsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\GetAnimalScreeningsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalScreenings(
        \Proto\AnimalScreeningService\GetAnimalScreeningsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\GetAnimalScreeningsResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalScreeningService\CreateAnimalScreeningRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\CreateAnimalScreeningResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalScreening(
        \Proto\AnimalScreeningService\CreateAnimalScreeningRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\CreateAnimalScreeningResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalScreeningService\UpdateAnimalScreeningRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\UpdateAnimalScreeningResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateAnimalScreening(
        \Proto\AnimalScreeningService\UpdateAnimalScreeningRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\UpdateAnimalScreeningResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalScreeningService\DeleteAnimalScreeningRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalScreeningService\DeleteAnimalScreeningResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteAnimalScreening(
        \Proto\AnimalScreeningService\DeleteAnimalScreeningRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalScreeningService\DeleteAnimalScreeningResponse {
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
            '/AnimalScreeningServicePackage.AnimalScreeningService/GetAnimalScreenings' => new \Grpc\MethodDescriptor(
                $this,
                'GetAnimalScreenings',
                '\Proto\AnimalScreeningService\GetAnimalScreeningsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalScreeningServicePackage.AnimalScreeningService/CreateAnimalScreening' => new \Grpc\MethodDescriptor(
                $this,
                'CreateAnimalScreening',
                '\Proto\AnimalScreeningService\CreateAnimalScreeningRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalScreeningServicePackage.AnimalScreeningService/UpdateAnimalScreening' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateAnimalScreening',
                '\Proto\AnimalScreeningService\UpdateAnimalScreeningRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalScreeningServicePackage.AnimalScreeningService/DeleteAnimalScreening' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteAnimalScreening',
                '\Proto\AnimalScreeningService\DeleteAnimalScreeningRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
