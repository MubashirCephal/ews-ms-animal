<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\RegistryService;

/**
 */
class RegistryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\RegistryService\GetServiceInRegistryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RegistryService\GetServiceInRegistryResponse>
     */
    public function GetService(\Proto\RegistryService\GetServiceInRegistryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RegistryServicePackage.RegistryService/GetService',
        $argument,
        ['\Proto\RegistryService\GetServiceInRegistryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RegistryService\CreateServiceInRegistryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RegistryService\CreateServiceInRegistryResponse>
     */
    public function CreateService(\Proto\RegistryService\CreateServiceInRegistryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RegistryServicePackage.RegistryService/CreateService',
        $argument,
        ['\Proto\RegistryService\CreateServiceInRegistryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RegistryService\UpdateServiceInRegistryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RegistryService\UpdateServiceInRegistryResponse>
     */
    public function UpdateService(\Proto\RegistryService\UpdateServiceInRegistryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RegistryServicePackage.RegistryService/UpdateService',
        $argument,
        ['\Proto\RegistryService\UpdateServiceInRegistryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\RegistryService\DeleteServiceInRegistryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\RegistryService\DeleteServiceInRegistryResponse>
     */
    public function DeleteService(\Proto\RegistryService\DeleteServiceInRegistryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/RegistryServicePackage.RegistryService/DeleteService',
        $argument,
        ['\Proto\RegistryService\DeleteServiceInRegistryResponse', 'decode'],
        $metadata, $options);
    }

}
