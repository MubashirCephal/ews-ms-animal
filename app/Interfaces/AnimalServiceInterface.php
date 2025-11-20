<?php

namespace App\Interfaces;

interface AnimalServiceInterface {

    /**
     * @param \Proto\AnimalService\GetAnimalsRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\GetAnimalsResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimals(
        \Proto\AnimalService\GetAnimalsRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\GetAnimalsResponse ;

    /**
     * @param \Proto\AnimalService\GetAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\GetAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetAnimal(
        \Proto\AnimalService\GetAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\GetAnimalResponse ;

    /**
     * @param \Proto\AnimalService\CreateAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\CreateAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function CreateAnimal(
        \Proto\AnimalService\CreateAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\CreateAnimalResponse ;

    /**
     * @param \Proto\AnimalService\UpdateAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\UpdateAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function UpdateAnimal(
        \Proto\AnimalService\UpdateAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\UpdateAnimalResponse ;

    /**
     * @param \Proto\AnimalService\DeleteAnimalRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Proto\AnimalService\DeleteAnimalResponse for response data, null if if error occurred
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function DeleteAnimal(
        \Proto\AnimalService\DeleteAnimalRequest $request,
        \Grpc\ServerContext $context
    ): ?\Proto\AnimalService\DeleteAnimalResponse ;

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */

}
