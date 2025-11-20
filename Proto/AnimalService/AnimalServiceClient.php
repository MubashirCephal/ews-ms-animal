<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalService;

/**
 */
class AnimalServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\AnimalService\GetAnimalsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalService\GetAnimalsResponse>
     */
    public function GetAnimals(\Proto\AnimalService\GetAnimalsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalServicePackage.AnimalService/GetAnimals',
        $argument,
        ['\Proto\AnimalService\GetAnimalsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalService\GetAnimalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalService\GetAnimalResponse>
     */
    public function GetAnimal(\Proto\AnimalService\GetAnimalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalServicePackage.AnimalService/GetAnimal',
        $argument,
        ['\Proto\AnimalService\GetAnimalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalService\CreateAnimalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalService\CreateAnimalResponse>
     */
    public function CreateAnimal(\Proto\AnimalService\CreateAnimalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalServicePackage.AnimalService/CreateAnimal',
        $argument,
        ['\Proto\AnimalService\CreateAnimalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalService\UpdateAnimalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalService\UpdateAnimalResponse>
     */
    public function UpdateAnimal(\Proto\AnimalService\UpdateAnimalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalServicePackage.AnimalService/UpdateAnimal',
        $argument,
        ['\Proto\AnimalService\UpdateAnimalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalService\DeleteAnimalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalService\DeleteAnimalResponse>
     */
    public function DeleteAnimal(\Proto\AnimalService\DeleteAnimalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalServicePackage.AnimalService/DeleteAnimal',
        $argument,
        ['\Proto\AnimalService\DeleteAnimalResponse', 'decode'],
        $metadata, $options);
    }

}
