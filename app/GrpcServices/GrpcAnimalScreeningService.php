<?php

namespace App\GrpcServices;

use App\Services\AnimalScreeningService;
use Grpc\ServerContext;
use Proto\AnimalScreeningService\AnimalScreeningServiceStub;
use Proto\AnimalScreeningService\CreateAnimalScreeningRequest;
use Proto\AnimalScreeningService\CreateAnimalScreeningResponse;
use Proto\AnimalScreeningService\DeleteAnimalScreeningRequest;
use Proto\AnimalScreeningService\DeleteAnimalScreeningResponse;
use Proto\AnimalScreeningService\GetAnimalScreeningsRequest;
use Proto\AnimalScreeningService\GetAnimalScreeningsResponse;
use Proto\AnimalScreeningService\UpdateAnimalScreeningRequest;
use Proto\AnimalScreeningService\UpdateAnimalScreeningResponse;

class GrpcAnimalScreeningService extends AnimalScreeningServiceStub
{
    public $animalScreeningService;
    public function __construct()
    {
        $this->animalScreeningService = new AnimalScreeningService();
    }
    public function GetAnimalScreenings(GetAnimalScreeningsRequest $request, ServerContext $context): ?GetAnimalScreeningsResponse
    {
        return $this->animalScreeningService->GetAnimalScreenings($request, $context);
    }
    public function CreateAnimalScreening(CreateAnimalScreeningRequest $request, ServerContext $context): ?CreateAnimalScreeningResponse
    {
        return $this->animalScreeningService->CreateAnimalScreening($request, $context);
    }
    public function UpdateAnimalScreening(UpdateAnimalScreeningRequest $request, ServerContext $context): ?UpdateAnimalScreeningResponse
    {
        return $this->animalScreeningService->UpdateAnimalScreening($request, $context);
    }
    public function DeleteAnimalScreening(DeleteAnimalScreeningRequest $request, ServerContext $context): ?DeleteAnimalScreeningResponse
    {
        return $this->animalScreeningService->DeleteAnimalScreening($request, $context);
    }
}
