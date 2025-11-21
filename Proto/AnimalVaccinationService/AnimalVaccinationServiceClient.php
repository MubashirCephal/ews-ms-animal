<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalVaccinationService;

/**
 */
class AnimalVaccinationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse>
     */
    public function GetAnimalVaccinations(\Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalVaccinationServicePackage.AnimalVaccinationService/GetAnimalVaccinations',
        $argument,
        ['\Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse>
     */
    public function CreateAnimalVaccination(\Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalVaccinationServicePackage.AnimalVaccinationService/CreateAnimalVaccination',
        $argument,
        ['\Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse>
     */
    public function UpdateAnimalVaccination(\Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalVaccinationServicePackage.AnimalVaccinationService/UpdateAnimalVaccination',
        $argument,
        ['\Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse>
     */
    public function DeleteAnimalVaccination(\Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalVaccinationServicePackage.AnimalVaccinationService/DeleteAnimalVaccination',
        $argument,
        ['\Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse', 'decode'],
        $metadata, $options);
    }

}
