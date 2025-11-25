<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalPostmortemService;

/**
 */
class AnimalPostmortemServiceStub {

    /**
     * @param \Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimalPostmortems(
        \Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimalPostmortem(
        \Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse {
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
            '/AnimalPostmortemPackage.AnimalPostmortemService/GetAnimalPostmortems' => new \Grpc\MethodDescriptor(
                $this,
                'GetAnimalPostmortems',
                '\Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/AnimalPostmortemPackage.AnimalPostmortemService/CreateAnimalPostmortem' => new \Grpc\MethodDescriptor(
                $this,
                'CreateAnimalPostmortem',
                '\Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
