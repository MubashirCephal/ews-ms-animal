<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalService;

/**
 */
class AnimalServiceStub {

    /**
     * @param \Proto\AnimalService\GetAnimalsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\GetAnimalsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimals(
        \Proto\AnimalService\GetAnimalsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\GetAnimalsResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalService\GetAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\GetAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimal(
        \Proto\AnimalService\GetAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\GetAnimalResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalService\CreateAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\CreateAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimal(
        \Proto\AnimalService\CreateAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\CreateAnimalResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalService\UpdateAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\UpdateAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateAnimal(
        \Proto\AnimalService\UpdateAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\UpdateAnimalResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalService\DeleteAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\DeleteAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteAnimal(
        \Proto\AnimalService\DeleteAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\DeleteAnimalResponse {
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
            '/AnimalServicePackage.AnimalService/GetAnimals' => new \Grpc\MethodDescriptor(
                $this,
                'GetAnimals',
                '\Proto\AnimalService\GetAnimalsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalServicePackage.AnimalService/GetAnimal' => new \Grpc\MethodDescriptor(
                $this,
                'GetAnimal',
                '\Proto\AnimalService\GetAnimalRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalServicePackage.AnimalService/CreateAnimal' => new \Grpc\MethodDescriptor(
                $this,
                'CreateAnimal',
                '\Proto\AnimalService\CreateAnimalRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalServicePackage.AnimalService/UpdateAnimal' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateAnimal',
                '\Proto\AnimalService\UpdateAnimalRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalServicePackage.AnimalService/DeleteAnimal' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteAnimal',
                '\Proto\AnimalService\DeleteAnimalRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
