<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\IdentityService;

/**
 */
class IdentityServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\IdentityService\GetUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IdentityService\GetUserResponse>
     */
    public function GetUser(\Proto\IdentityService\GetUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IdentityServicePackage.IdentityService/GetUser',
        $argument,
        ['\Proto\IdentityService\GetUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\IdentityService\UserLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IdentityService\UserLoginResponse>
     */
    public function LoginUser(\Proto\IdentityService\UserLoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IdentityServicePackage.IdentityService/LoginUser',
        $argument,
        ['\Proto\IdentityService\UserLoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\IdentityService\GetAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IdentityService\GetAddressResponse>
     */
    public function GetAddress(\Proto\IdentityService\GetAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IdentityServicePackage.IdentityService/GetAddress',
        $argument,
        ['\Proto\IdentityService\GetAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\IdentityService\CreateAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IdentityService\CreateAddressResponse>
     */
    public function CreateAddress(\Proto\IdentityService\CreateAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IdentityServicePackage.IdentityService/CreateAddress',
        $argument,
        ['\Proto\IdentityService\CreateAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\IdentityService\UpdateAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IdentityService\UpdateAddressResponse>
     */
    public function UpdateAddress(\Proto\IdentityService\UpdateAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IdentityServicePackage.IdentityService/UpdateAddress',
        $argument,
        ['\Proto\IdentityService\UpdateAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\IdentityService\DeleteAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IdentityService\DeleteAddressResponse>
     */
    public function DeleteAddress(\Proto\IdentityService\DeleteAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IdentityServicePackage.IdentityService/DeleteAddress',
        $argument,
        ['\Proto\IdentityService\DeleteAddressResponse', 'decode'],
        $metadata, $options);
    }

}
