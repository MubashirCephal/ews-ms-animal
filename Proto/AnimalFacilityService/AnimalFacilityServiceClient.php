<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalFacilityService;

/**
 */
class AnimalFacilityServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\AnimalFacilityService\GetAnimalFacilitiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalFacilityService\GetAnimalFacilitiesResponse>
     */
    public function GetAnimalFacilities(\Proto\AnimalFacilityService\GetAnimalFacilitiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalFacilityServicePackage.AnimalFacilityService/GetAnimalFacilities',
        $argument,
        ['\Proto\AnimalFacilityService\GetAnimalFacilitiesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalFacilityService\CreateAnimalFacilityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalFacilityService\CreateAnimalFacilityResponse>
     */
    public function CreateAnimalFacility(\Proto\AnimalFacilityService\CreateAnimalFacilityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalFacilityServicePackage.AnimalFacilityService/CreateAnimalFacility',
        $argument,
        ['\Proto\AnimalFacilityService\CreateAnimalFacilityResponse', 'decode'],
        $metadata, $options);
    }

}
