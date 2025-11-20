<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalVaccinationService;

/**
 */
class AnimalVaccinationServiceStub {

    /**
     * @param \Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalVaccinations(
        \Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalVaccination(
        \Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateAnimalVaccination(
        \Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteAnimalVaccination(
        \Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse {
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
            '/AnimalVaccinationServicePackage.AnimalVaccinationService/GetAnimalVaccinations' => new \Grpc\MethodDescriptor(
                $this,
                'GetAnimalVaccinations',
                '\Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalVaccinationServicePackage.AnimalVaccinationService/CreateAnimalVaccination' => new \Grpc\MethodDescriptor(
                $this,
                'CreateAnimalVaccination',
                '\Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalVaccinationServicePackage.AnimalVaccinationService/UpdateAnimalVaccination' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateAnimalVaccination',
                '\Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalVaccinationServicePackage.AnimalVaccinationService/DeleteAnimalVaccination' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteAnimalVaccination',
                '\Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
