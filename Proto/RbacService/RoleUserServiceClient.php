<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RbacService;

/**
 */
class RoleUserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\RbacService\GetRoleUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\GetRoleUserResponse>
     */
    public function GetRoleUser(\Proto\RbacService\GetRoleUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RoleUserService/GetRoleUser',
        $argument,
        ['\Proto\RbacService\GetRoleUserResponse', 'decode'],
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
        return $this->_simpleRequest('/RbacServicePackage.RoleUserService/CreateRoleUser',
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
        return $this->_simpleRequest('/RbacServicePackage.RoleUserService/UpdateRoleUser',
        $argument,
        ['\Proto\RbacService\UpdateRoleUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RbacService\DeleteRoleUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RbacService\DeleteRoleUserResponse>
     */
    public function DeleteRoleUser(\Proto\RbacService\DeleteRoleUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RbacServicePackage.RoleUserService/DeleteRoleUser',
        $argument,
        ['\Proto\RbacService\DeleteRoleUserResponse', 'decode'],
        $metadata, $options);
    }

}
