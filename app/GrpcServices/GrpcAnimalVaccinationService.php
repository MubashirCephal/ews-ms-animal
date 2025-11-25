<?php

namespace App\GrpcServices;

use App\Services\AnimalVaccinationService;
use Grpc\ServerContext;
use Proto\AnimalVaccinationService\AnimalVaccinationServiceStub;
use Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest;
use Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse;
use Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest;
use Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse;
use Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest;
use Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse;
use Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest;
use Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse;

class GrpcAnimalVaccinationService extends AnimalVaccinationServiceStub
{
    public $animalVaccinationService;
    public function __construct()
    {
        $this->animalVaccinationService = new AnimalVaccinationService();
    }
    public function GetAnimalVaccinations(GetAnimalVaccinationsRequest $request, ServerContext $context): ?GetAnimalVaccinationsResponse
    {
        return $this->animalVaccinationService->GetAnimalVaccinations($request, $context);
    }
    public function CreateAnimalVaccination(CreateAnimalVaccinationRequest $request, ServerContext $context): ?CreateAnimalVaccinationResponse
    {
        return $this->animalVaccinationService->CreateAnimalVaccination($request, $context);
    }
    public function UpdateAnimalVaccination(UpdateAnimalVaccinationRequest $request, ServerContext $context): ?UpdateAnimalVaccinationResponse
    {
        return $this->animalVaccinationService->UpdateAnimalVaccination($request, $context);
    }
    public function DeleteAnimalVaccination(DeleteAnimalVaccinationRequest $request, ServerContext $context): ?DeleteAnimalVaccinationResponse
    {
        return $this->animalVaccinationService->DeleteAnimalVaccination($request, $context);
    }
}
