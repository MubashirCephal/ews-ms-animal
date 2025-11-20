<?php

namespace App\GrpcServices;

use App\Services\SpeciesService;
use Grpc\ServerContext;
use Proto\SpeciesService\CreateSpeciesRequest;
use Proto\SpeciesService\CreateSpeciesResponse;
use Proto\SpeciesService\DeleteSpeciesRequest;
use Proto\SpeciesService\DeleteSpeciesResponse;
use Proto\SpeciesService\GetSpeciesByIdRequest;
use Proto\SpeciesService\GetSpeciesByIdResponse;
use Proto\SpeciesService\GetSpeciesRequest;
use Proto\SpeciesService\GetSpeciesResponse;
use Proto\SpeciesService\SpeciesServiceStub;
use Proto\SpeciesService\UpdateSpeciesRequest;
use Proto\SpeciesService\UpdateSpeciesResponse;

class GrpcSpeciesService  extends SpeciesServiceStub
{
    public $speciesService;
    public function __construct()
    {
        $this->speciesService = new SpeciesService();
    }
    public function GetSpecies(GetSpeciesRequest $request, ServerContext $context): ?GetSpeciesResponse
    {
        return $this->speciesService->GetSpecies($request, $context);
    }

    public function GetSpeciesById(GetSpeciesByIdRequest $request, ServerContext $context): ?GetSpeciesByIdResponse
    {
        return $this->speciesService->GetSpeciesById($request, $context);
    }
    public function CreateSpecies(CreateSpeciesRequest $request, ServerContext $context): ?CreateSpeciesResponse
    {
        return $this->speciesService->CreateSpecies($request, $context);
    }

    public function UpdateSpecies(UpdateSpeciesRequest $request, ServerContext $context): ?UpdateSpeciesResponse
    {
        return $this->speciesService->UpdateSpecies($request, $context);
    }
    public function DeleteSpecies(DeleteSpeciesRequest $request, ServerContext $context): ?DeleteSpeciesResponse
    {
        return $this->speciesService->DeleteSpecies($request, $context);
    }
}
