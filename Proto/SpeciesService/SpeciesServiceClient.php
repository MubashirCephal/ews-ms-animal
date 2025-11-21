<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\SpeciesService;

/**
 */
class SpeciesServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\SpeciesService\GetSpeciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\SpeciesService\GetSpeciesResponse>
     */
    public function GetSpecies(\Proto\SpeciesService\GetSpeciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/SpeciesServicePackage.SpeciesService/GetSpecies',
        $argument,
        ['\Proto\SpeciesService\GetSpeciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SpeciesService\GetSpeciesByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\SpeciesService\GetSpeciesByIdResponse>
     */
    public function GetSpeciesById(\Proto\SpeciesService\GetSpeciesByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/SpeciesServicePackage.SpeciesService/GetSpeciesById',
        $argument,
        ['\Proto\SpeciesService\GetSpeciesByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SpeciesService\CreateSpeciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\SpeciesService\CreateSpeciesResponse>
     */
    public function CreateSpecies(\Proto\SpeciesService\CreateSpeciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/SpeciesServicePackage.SpeciesService/CreateSpecies',
        $argument,
        ['\Proto\SpeciesService\CreateSpeciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SpeciesService\UpdateSpeciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\SpeciesService\UpdateSpeciesResponse>
     */
    public function UpdateSpecies(\Proto\SpeciesService\UpdateSpeciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/SpeciesServicePackage.SpeciesService/UpdateSpecies',
        $argument,
        ['\Proto\SpeciesService\UpdateSpeciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SpeciesService\DeleteSpeciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\SpeciesService\DeleteSpeciesResponse>
     */
    public function DeleteSpecies(\Proto\SpeciesService\DeleteSpeciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/SpeciesServicePackage.SpeciesService/DeleteSpecies',
        $argument,
        ['\Proto\SpeciesService\DeleteSpeciesResponse', 'decode'],
        $metadata, $options);
    }

}
