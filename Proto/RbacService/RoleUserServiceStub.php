<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RoleUserServiceStub {

    /**
     * @param \Proto\RbacService\GetRoleUserRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\GetRoleUserResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetRoleUser(
        \Proto\RbacService\GetRoleUserRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\GetRoleUserResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\CreateRoleUserRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\CreateRoleUserResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateRoleUser(
        \Proto\RbacService\CreateRoleUserRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\CreateRoleUserResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\UpdateRoleUserRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\UpdateRoleUserResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateRoleUser(
        \Proto\RbacService\UpdateRoleUserRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\UpdateRoleUserResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\DeleteRoleUserRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\DeleteRoleUserResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteRoleUser(
        \Proto\RbacService\DeleteRoleUserRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\DeleteRoleUserResponse {
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
            '/RbacServicePackage.RoleUserService/GetRoleUser' => new \Grpc\MethodDescriptor(
                $this,
                'GetRoleUser',
                '\Proto\RbacService\GetRoleUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RoleUserService/CreateRoleUser' => new \Grpc\MethodDescriptor(
                $this,
                'CreateRoleUser',
                '\Proto\RbacService\CreateRoleUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RoleUserService/UpdateRoleUser' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateRoleUser',
                '\Proto\RbacService\UpdateRoleUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RoleUserService/DeleteRoleUser' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteRoleUser',
                '\Proto\RbacService\DeleteRoleUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
