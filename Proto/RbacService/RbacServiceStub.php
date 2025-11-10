<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RbacServiceStub {

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
     * @param \Proto\RbacService\CreateServiceInRegistryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\CreateServiceInRegistryResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateService(
        \Proto\RbacService\CreateServiceInRegistryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\CreateServiceInRegistryResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Proto\RbacService\UpdateServiceInRegistryRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\RbacService\UpdateServiceInRegistryResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateService(
        \Proto\RbacService\UpdateServiceInRegistryRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\RbacService\UpdateServiceInRegistryResponse {
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
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/RbacServicePackage.RbacService/GetClaims' => new \Grpc\MethodDescriptor(
                $this,
                'GetClaims',
                '\Proto\RbacService\GetClaimsRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/CreateService' => new \Grpc\MethodDescriptor(
                $this,
                'CreateService',
                '\Proto\RbacService\CreateServiceInRegistryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/UpdateService' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateService',
                '\Proto\RbacService\UpdateServiceInRegistryRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/CreateRole' => new \Grpc\MethodDescriptor(
                $this,
                'CreateRole',
                '\Proto\RbacService\CreateRoleRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/UpdateRole' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateRole',
                '\Proto\RbacService\UpdateRoleRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/CreatePermission' => new \Grpc\MethodDescriptor(
                $this,
                'CreatePermission',
                '\Proto\RbacService\CreatePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/UpdatePermission' => new \Grpc\MethodDescriptor(
                $this,
                'UpdatePermission',
                '\Proto\RbacService\UpdatePermissionRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/CreateRoleUser' => new \Grpc\MethodDescriptor(
                $this,
                'CreateRoleUser',
                '\Proto\RbacService\CreateRoleUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/RbacServicePackage.RbacService/UpdateRoleUser' => new \Grpc\MethodDescriptor(
                $this,
                'UpdateRoleUser',
                '\Proto\RbacService\UpdateRoleUserRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
