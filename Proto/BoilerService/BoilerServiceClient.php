<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\BoilerService;

/**
 */
class BoilerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\BoilerService\PingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\BoilerService\PingResponse>
     */
    public function Ping(\Proto\BoilerService\PingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/BoilerServicePackage.BoilerService/Ping',
        $argument,
        ['\Proto\BoilerService\PingResponse', 'decode'],
        $metadata, $options);
    }

}
