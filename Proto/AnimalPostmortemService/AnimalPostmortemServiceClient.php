<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto\AnimalPostmortemService;

/**
 */
class AnimalPostmortemServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse>
     */
    public function GetAnimalPostmortems(\Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalPostmortemPackage.AnimalPostmortemService/GetAnimalPostmortems',
        $argument,
        ['\Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse>
     */
    public function CreateAnimalPostmortem(\Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/AnimalPostmortemPackage.AnimalPostmortemService/CreateAnimalPostmortem',
        $argument,
        ['\Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse', 'decode'],
        $metadata, $options);
    }

}
