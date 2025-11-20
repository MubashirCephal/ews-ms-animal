<?php 

namespace App\GrpcServices;

use App\Services\AnimalService;
use Grpc\ServerContext;
use Proto\AnimalService\AnimalServiceStub;
use Proto\AnimalService\CreateAnimalRequest;
use Proto\AnimalService\CreateAnimalResponse;
use Proto\AnimalService\DeleteAnimalRequest;
use Proto\AnimalService\DeleteAnimalResponse;
use Proto\AnimalService\GetAnimalRequest;
use Proto\AnimalService\GetAnimalResponse;
use Proto\AnimalService\GetAnimalsRequest;
use Proto\AnimalService\GetAnimalsResponse;
use Proto\AnimalService\UpdateAnimalRequest;
use Proto\AnimalService\UpdateAnimalResponse;

class GrpcAnimalService extends AnimalServiceStub {
    public $animalService;
    public function __construct() {
        $this->animalService = new AnimalService();
    }
    public function GetAnimals(GetAnimalsRequest $request,ServerContext $context):?GetAnimalsResponse{
        return $this->animalService->getAnimals($request, $context);
    }
    public function GetAnimal(GetAnimalRequest $request,ServerContext $context):?GetAnimalResponse{
        return $this->animalService->getAnimal($request, $context);
    }
    public function CreateAnimal(CreateAnimalRequest $request,ServerContext $context):?CreateAnimalResponse{
        return $this->animalService->createAnimal($request, $context);
    }
    public function updateAnimal(UpdateAnimalRequest $request, ServerContext $context):?UpdateAnimalResponse{
        return $this->animalService->updateAnimal($request, $context);
    }
    public function deleteAnimal(DeleteAnimalRequest $request, ServerContext $context):?DeleteAnimalResponse{
        return $this->animalService->deleteAnimal($request, $context);
    }
}