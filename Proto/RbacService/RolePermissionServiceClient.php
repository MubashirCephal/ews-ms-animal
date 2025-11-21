<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RolePermissionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\RbacService\GetRolePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\GetRolePermissionResponse>
     */
    public function GetRolePermission(\Proto\RbacService\GetRolePermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RolePermissionService/GetRolePermission',
        $argument,
        ['\Proto\RbacService\GetRolePermissionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\CreateRolePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\CreateRolePermissionResponse>
     */
    public function CreateRolePermission(\Proto\RbacService\CreateRolePermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RolePermissionService/CreateRolePermission',
        $argument,
        ['\Proto\RbacService\CreateRolePermissionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\UpdateRolePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\UpdateRolePermissionResponse>
     */
    public function UpdateRolePermission(\Proto\RbacService\UpdateRolePermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RolePermissionService/UpdateRolePermission',
        $argument,
        ['\Proto\RbacService\UpdateRolePermissionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\DeleteRolePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\DeleteRolePermissionResponse>
     */
    public function DeleteRolePermission(\Proto\RbacService\DeleteRolePermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RolePermissionService/DeleteRolePermission',
        $argument,
        ['\Proto\RbacService\DeleteRolePermissionResponse', 'decode'],
        $metadata, $options);
    }

}
