<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RoleServiceClient extends \Grpc\BaseStub {

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
        return $this->_simpleRequest('/RbacServicePackage.RoleService/GetClaims',
        $argument,
        ['\Proto\RbacService\GetClaimsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\GetRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\GetRoleResponse>
     */
    public function GetRole(\Proto\RbacService\GetRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RoleService/GetRole',
        $argument,
        ['\Proto\RbacService\GetRoleResponse', 'decode'],
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
        return $this->_simpleRequest('/RbacServicePackage.RoleService/CreateRole',
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
        return $this->_simpleRequest('/RbacServicePackage.RoleService/UpdateRole',
        $argument,
        ['\Proto\RbacService\UpdateRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\DeleteRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\DeleteRoleResponse>
     */
    public function DeleteRole(\Proto\RbacService\DeleteRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RoleService/DeleteRole',
        $argument,
        ['\Proto\RbacService\DeleteRoleResponse', 'decode'],
        $metadata, $options);
    }

}
