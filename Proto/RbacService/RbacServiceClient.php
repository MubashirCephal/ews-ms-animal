<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RbacServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\RbacService\GetClaimsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\GetClaimsResponse>
     */
    public function GetClaims(\Proto\RbacService\GetClaimsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/GetClaims',
        $argument,
        ['\Proto\RbacService\GetClaimsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\CreateServiceInRegistryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\CreateServiceInRegistryResponse>
     */
    public function CreateService(\Proto\RbacService\CreateServiceInRegistryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/CreateService',
        $argument,
        ['\Proto\RbacService\CreateServiceInRegistryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\UpdateServiceInRegistryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\UpdateServiceInRegistryResponse>
     */
    public function UpdateService(\Proto\RbacService\UpdateServiceInRegistryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/UpdateService',
        $argument,
        ['\Proto\RbacService\UpdateServiceInRegistryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\CreateRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\CreateRoleResponse>
     */
    public function CreateRole(\Proto\RbacService\CreateRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/CreateRole',
        $argument,
        ['\Proto\RbacService\CreateRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\UpdateRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\UpdateRoleResponse>
     */
    public function UpdateRole(\Proto\RbacService\UpdateRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/UpdateRole',
        $argument,
        ['\Proto\RbacService\UpdateRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\CreatePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\CreatePermissionResponse>
     */
    public function CreatePermission(\Proto\RbacService\CreatePermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/CreatePermission',
        $argument,
        ['\Proto\RbacService\CreatePermissionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\UpdatePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\UpdatePermissionResponse>
     */
    public function UpdatePermission(\Proto\RbacService\UpdatePermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/UpdatePermission',
        $argument,
        ['\Proto\RbacService\UpdatePermissionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\CreateRoleUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\CreateRoleUserResponse>
     */
    public function CreateRoleUser(\Proto\RbacService\CreateRoleUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/CreateRoleUser',
        $argument,
        ['\Proto\RbacService\CreateRoleUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\UpdateRoleUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\UpdateRoleUserResponse>
     */
    public function UpdateRoleUser(\Proto\RbacService\UpdateRoleUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RbacService/UpdateRoleUser',
        $argument,
        ['\Proto\RbacService\UpdateRoleUserResponse', 'decode'],
        $metadata, $options);
    }

}
