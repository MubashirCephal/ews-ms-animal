<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\IamService;

/**
 */
class IamServiceStub {

    /**
     * @param \Proto\IamService\GetUserRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IamService\GetUserResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetUser(
        \Proto\IamService\GetUserRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IamService\GetUserResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\IamService\UserLoginRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\IamService\UserLoginResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function LoginUser(
        \Proto\IamService\UserLoginRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\IamService\UserLoginResponse {
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
            '/IamServicePackage.IamService/GetUser' => new \Grpc\MethodDescriptor(
                $this,
                'GetUser',
                '\Proto\IamService\GetUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/IamServicePackage.IamService/LoginUser' => new \Grpc\MethodDescriptor(
                $this,
                'LoginUser',
                '\Proto\IamService\UserLoginRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
