<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\BreedService;

/**
 */
class BreedServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\BreedService\GetBreedsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\BreedService\GetBreedsResponse>
     */
    public function GetBreeds(\Proto\BreedService\GetBreedsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/BreedServicePackage.BreedService/GetBreeds',
        $argument,
        ['\Proto\BreedService\GetBreedsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\BreedService\GetBreedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\BreedService\GetBreedResponse>
     */
    public function GetBreed(\Proto\BreedService\GetBreedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/BreedServicePackage.BreedService/GetBreed',
        $argument,
        ['\Proto\BreedService\GetBreedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\BreedService\CreateBreedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\BreedService\CreateBreedResponse>
     */
    public function CreateBreed(\Proto\BreedService\CreateBreedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/BreedServicePackage.BreedService/CreateBreed',
        $argument,
        ['\Proto\BreedService\CreateBreedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\BreedService\UpdateBreedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\BreedService\UpdateBreedResponse>
     */
    public function UpdateBreed(\Proto\BreedService\UpdateBreedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/BreedServicePackage.BreedService/UpdateBreed',
        $argument,
        ['\Proto\BreedService\UpdateBreedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\BreedService\DeleteBreedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\BreedService\DeleteBreedResponse>
     */
    public function DeleteBreed(\Proto\BreedService\DeleteBreedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/BreedServicePackage.BreedService/DeleteBreed',
        $argument,
        ['\Proto\BreedService\DeleteBreedResponse', 'decode'],
        $metadata, $options);
    }

}
