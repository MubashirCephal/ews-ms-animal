<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RoleServiceStub {

    /**
     * @param \Proto\RbacService\GetClaimsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\GetClaimsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetClaims(
        \Proto\RbacService\GetClaimsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\GetClaimsResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\GetRoleRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\GetRoleResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetRole(
        \Proto\RbacService\GetRoleRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\GetRoleResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\CreateRoleRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\CreateRoleResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateRole(
        \Proto\RbacService\CreateRoleRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\CreateRoleResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\UpdateRoleRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\UpdateRoleResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateRole(
        \Proto\RbacService\UpdateRoleRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\UpdateRoleResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\DeleteRoleRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\DeleteRoleResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteRole(
        \Proto\RbacService\DeleteRoleRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\DeleteRoleResponse {
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
            '/RbacServicePackage.RoleService/GetClaims' => new \Grpc\MethodDescriptor(
                $this,
                'GetClaims',
                '\Proto\RbacService\GetClaimsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RoleService/GetRole' => new \Grpc\MethodDescriptor(
                $this,
                'GetRole',
                '\Proto\RbacService\GetRoleRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RoleService/CreateRole' => new \Grpc\MethodDescriptor(
                $this,
                'CreateRole',
                '\Proto\RbacService\CreateRoleRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RoleService/UpdateRole' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateRole',
                '\Proto\RbacService\UpdateRoleRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RoleService/DeleteRole' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteRole',
                '\Proto\RbacService\DeleteRoleRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
