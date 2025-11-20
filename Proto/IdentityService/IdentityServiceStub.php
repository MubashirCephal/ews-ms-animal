<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\IdentityService;

/**
 */
class IdentityServiceStub {

    /**
     * @param \Proto\IdentityService\GetUserRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IdentityService\GetUserResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetUser(
        \Proto\IdentityService\GetUserRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IdentityService\GetUserResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\IdentityService\UserLoginRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IdentityService\UserLoginResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function LoginUser(
        \Proto\IdentityService\UserLoginRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IdentityService\UserLoginResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\IdentityService\GetAddressRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IdentityService\GetAddressResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAddress(
        \Proto\IdentityService\GetAddressRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IdentityService\GetAddressResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\IdentityService\CreateAddressRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IdentityService\CreateAddressResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAddress(
        \Proto\IdentityService\CreateAddressRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IdentityService\CreateAddressResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\IdentityService\UpdateAddressRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IdentityService\UpdateAddressResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateAddress(
        \Proto\IdentityService\UpdateAddressRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IdentityService\UpdateAddressResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\IdentityService\DeleteAddressRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IdentityService\DeleteAddressResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteAddress(
        \Proto\IdentityService\DeleteAddressRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IdentityService\DeleteAddressResponse {
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
            '/IdentityServicePackage.IdentityService/GetUser' => new \Grpc\MethodDescriptor(
                $this,
                'GetUser',
                '\Proto\IdentityService\GetUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/IdentityServicePackage.IdentityService/LoginUser' => new \Grpc\MethodDescriptor(
                $this,
                'LoginUser',
                '\Proto\IdentityService\UserLoginRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/IdentityServicePackage.IdentityService/GetAddress' => new \Grpc\MethodDescriptor(
                $this,
                'GetAddress',
                '\Proto\IdentityService\GetAddressRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/IdentityServicePackage.IdentityService/CreateAddress' => new \Grpc\MethodDescriptor(
                $this,
                'CreateAddress',
                '\Proto\IdentityService\CreateAddressRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/IdentityServicePackage.IdentityService/UpdateAddress' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateAddress',
                '\Proto\IdentityService\UpdateAddressRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/IdentityServicePackage.IdentityService/DeleteAddress' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteAddress',
                '\Proto\IdentityService\DeleteAddressRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
