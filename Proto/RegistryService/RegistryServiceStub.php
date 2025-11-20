<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RegistryService;

/**
 */
class RegistryServiceStub {

    /**
     * @param \Proto\RegistryService\GetServiceInRegistryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RegistryService\GetServiceInRegistryResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetService(
        \Proto\RegistryService\GetServiceInRegistryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RegistryService\GetServiceInRegistryResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RegistryService\CreateServiceInRegistryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RegistryService\CreateServiceInRegistryResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateService(
        \Proto\RegistryService\CreateServiceInRegistryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RegistryService\CreateServiceInRegistryResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RegistryService\UpdateServiceInRegistryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RegistryService\UpdateServiceInRegistryResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateService(
        \Proto\RegistryService\UpdateServiceInRegistryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RegistryService\UpdateServiceInRegistryResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RegistryService\DeleteServiceInRegistryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RegistryService\DeleteServiceInRegistryResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteService(
        \Proto\RegistryService\DeleteServiceInRegistryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RegistryService\DeleteServiceInRegistryResponse {
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
            '/RegistryServicePackage.RegistryService/GetService' => new \Grpc\MethodDescriptor(
                $this,
                'GetService',
                '\Proto\RegistryService\GetServiceInRegistryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RegistryServicePackage.RegistryService/CreateService' => new \Grpc\MethodDescriptor(
                $this,
                'CreateService',
                '\Proto\RegistryService\CreateServiceInRegistryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RegistryServicePackage.RegistryService/UpdateService' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateService',
                '\Proto\RegistryService\UpdateServiceInRegistryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RegistryServicePackage.RegistryService/DeleteService' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteService',
                '\Proto\RegistryService\DeleteServiceInRegistryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
