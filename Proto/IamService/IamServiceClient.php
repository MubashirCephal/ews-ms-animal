<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\IamService;

/**
 */
class IamServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\IamService\GetUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IamService\GetUserResponse>
     */
    public function GetUser(\Proto\IamService\GetUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IamServicePackage.IamService/GetUser',
        $argument,
        ['\Proto\IamService\GetUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\IamService\UserLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\IamService\UserLoginResponse>
     */
    public function LoginUser(\Proto\IamService\UserLoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/IamServicePackage.IamService/LoginUser',
        $argument,
        ['\Proto\IamService\UserLoginResponse', 'decode'],
        $metadata, $options);
    }

}
