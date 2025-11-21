<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalFacilityService;

/**
 */
class AnimalFacilityServiceStub {

    /**
     * @param \Proto\AnimalFacilityService\GetAnimalFacilitiesRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalFacilityService\GetAnimalFacilitiesResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalFacilities(
        \Proto\AnimalFacilityService\GetAnimalFacilitiesRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalFacilityService\GetAnimalFacilitiesResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalFacilityService\CreateAnimalFacilityRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalFacilityService\CreateAnimalFacilityResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalFacility(
        \Proto\AnimalFacilityService\CreateAnimalFacilityRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalFacilityService\CreateAnimalFacilityResponse {
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
            '/AnimalFacilityServicePackage.AnimalFacilityService/GetAnimalFacilities' => new \Grpc\MethodDescriptor(
                $this,
                'GetAnimalFacilities',
                '\Proto\AnimalFacilityService\GetAnimalFacilitiesRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalFacilityServicePackage.AnimalFacilityService/CreateAnimalFacility' => new \Grpc\MethodDescriptor(
                $this,
                'CreateAnimalFacility',
                '\Proto\AnimalFacilityService\CreateAnimalFacilityRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
