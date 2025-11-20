<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalScreeningService;

/**
 */
class AnimalScreeningServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\AnimalScreeningService\GetAnimalScreeningsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalScreeningService\GetAnimalScreeningsResponse>
     */
    public function GetAnimalScreenings(\Proto\AnimalScreeningService\GetAnimalScreeningsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalScreeningServicePackage.AnimalScreeningService/GetAnimalScreenings',
        $argument,
        ['\Proto\AnimalScreeningService\GetAnimalScreeningsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalScreeningService\CreateAnimalScreeningRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalScreeningService\CreateAnimalScreeningResponse>
     */
    public function CreateAnimalScreening(\Proto\AnimalScreeningService\CreateAnimalScreeningRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalScreeningServicePackage.AnimalScreeningService/CreateAnimalScreening',
        $argument,
        ['\Proto\AnimalScreeningService\CreateAnimalScreeningResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalScreeningService\UpdateAnimalScreeningRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalScreeningService\UpdateAnimalScreeningResponse>
     */
    public function UpdateAnimalScreening(\Proto\AnimalScreeningService\UpdateAnimalScreeningRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalScreeningServicePackage.AnimalScreeningService/UpdateAnimalScreening',
        $argument,
        ['\Proto\AnimalScreeningService\UpdateAnimalScreeningResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalScreeningService\DeleteAnimalScreeningRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalScreeningService\DeleteAnimalScreeningResponse>
     */
    public function DeleteAnimalScreening(\Proto\AnimalScreeningService\DeleteAnimalScreeningRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalScreeningServicePackage.AnimalScreeningService/DeleteAnimalScreening',
        $argument,
        ['\Proto\AnimalScreeningService\DeleteAnimalScreeningResponse', 'decode'],
        $metadata, $options);
    }

}
