<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class PermissionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\RbacService\GetPermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\GetPermissionResponse>
     */
    public function GetPermission(\Proto\RbacService\GetPermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.PermissionService/GetPermission',
        $argument,
        ['\Proto\RbacService\GetPermissionResponse', 'decode'],
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
        return $this->_simpleRequest('/RbacServicePackage.PermissionService/CreatePermission',
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
        return $this->_simpleRequest('/RbacServicePackage.PermissionService/UpdatePermission',
        $argument,
        ['\Proto\RbacService\UpdatePermissionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\DeletePermissionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\DeletePermissionResponse>
     */
    public function DeletePermission(\Proto\RbacService\DeletePermissionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.PermissionService/DeletePermission',
        $argument,
        ['\Proto\RbacService\DeletePermissionResponse', 'decode'],
        $metadata, $options);
    }

}
