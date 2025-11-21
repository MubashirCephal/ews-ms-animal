<?php 

namespace App\GrpcServices;

use App\Services\BreedService;
use Grpc\ServerContext;
use Proto\BreedService\BreedServiceStub;
use Proto\BreedService\CreateBreedRequest;
use Proto\BreedService\CreateBreedResponse;
use Proto\BreedService\DeleteBreedRequest;
use Proto\BreedService\DeleteBreedResponse;
use Proto\BreedService\GetBreedRequest;
use Proto\BreedService\GetBreedResponse;
use Proto\BreedService\GetBreedsRequest;
use Proto\BreedService\GetBreedsResponse;
use Proto\BreedService\UpdateBreedRequest;
use Proto\BreedService\UpdateBreedResponse;

class GrpcBreedService extends BreedServiceStub
{
    public $breedService;
    public function __construct()
    {
        $this->breedService = new BreedService();
    }
    public function GetBreeds(GetBreedsRequest $request, ServerContext $context): ?GetBreedsResponse
    {
        return $this->breedService->GetBreeds($request, $context);
    } 
    public function GetBreed(GetBreedRequest $request, ServerContext $context): ?GetBreedResponse
    {
        return $this->breedService->GetBreed($request, $context);
    }
    public function CreateBreed(CreateBreedRequest $request, ServerContext $context): ?CreateBreedResponse
    {
        return $this->breedService->CreateBreed($request, $context);
    }
    public function UpdateBreed(UpdateBreedRequest $request, ServerContext $context): ?UpdateBreedResponse
    {
        return $this->breedService->UpdateBreed($request, $context);
    }
    public function DeleteBreed(DeleteBreedRequest $request, ServerContext $context): ?DeleteBreedResponse
    {
        return $this->breedService->DeleteBreed($request, $context);
    }
}