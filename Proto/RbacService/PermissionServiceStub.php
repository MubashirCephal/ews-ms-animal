<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class PermissionServiceStub {

    /**
     * @param \Proto\RbacService\GetPermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\GetPermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetPermission(
        \Proto\RbacService\GetPermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\GetPermissionResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\CreatePermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\CreatePermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreatePermission(
        \Proto\RbacService\CreatePermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\CreatePermissionResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\UpdatePermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\UpdatePermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdatePermission(
        \Proto\RbacService\UpdatePermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\UpdatePermissionResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\DeletePermissionRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\DeletePermissionResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeletePermission(
        \Proto\RbacService\DeletePermissionRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\DeletePermissionResponse {
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
            '/RbacServicePackage.PermissionService/GetPermission' => new \Grpc\MethodDescriptor(
                $this,
                'GetPermission',
                '\Proto\RbacService\GetPermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.PermissionService/CreatePermission' => new \Grpc\MethodDescriptor(
                $this,
                'CreatePermission',
                '\Proto\RbacService\CreatePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.PermissionService/UpdatePermission' => new \Grpc\MethodDescriptor(
                $this,
                'UpdatePermission',
                '\Proto\RbacService\UpdatePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.PermissionService/DeletePermission' => new \Grpc\MethodDescriptor(
                $this,
                'DeletePermission',
                '\Proto\RbacService\DeletePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
