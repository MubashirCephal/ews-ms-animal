<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RolePermissionServiceStub {

    /**
     * @param \Proto\RbacService\GetRolePermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\GetRolePermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetRolePermission(
        \Proto\RbacService\GetRolePermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\GetRolePermissionResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\CreateRolePermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\CreateRolePermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateRolePermission(
        \Proto\RbacService\CreateRolePermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\CreateRolePermissionResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\UpdateRolePermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\UpdateRolePermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateRolePermission(
        \Proto\RbacService\UpdateRolePermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\UpdateRolePermissionResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\DeleteRolePermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\DeleteRolePermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteRolePermission(
        \Proto\RbacService\DeleteRolePermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\DeleteRolePermissionResponse {
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
            '/RbacServicePackage.RolePermissionService/GetRolePermission' => new \Grpc\MethodDescriptor(
                $this,
                'GetRolePermission',
                '\Proto\RbacService\GetRolePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RolePermissionService/CreateRolePermission' => new \Grpc\MethodDescriptor(
                $this,
                'CreateRolePermission',
                '\Proto\RbacService\CreateRolePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RolePermissionService/UpdateRolePermission' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateRolePermission',
                '\Proto\RbacService\UpdateRolePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RolePermissionService/DeleteRolePermission' => new \Grpc\MethodDescriptor(
                $this,
                'DeleteRolePermission',
                '\Proto\RbacService\DeleteRolePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
