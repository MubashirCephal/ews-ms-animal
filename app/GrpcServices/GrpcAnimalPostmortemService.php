<?php

namespace App\GrpcServices;

use App\Models\AnimalPostmortem;
use App\Services\AnimalPostmortemService;
use Proto\AnimalPostmortemService\AnimalPostmortemServiceStub;

use Grpc\ServerContext;
use Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse;
use Proto\AnimalPostmortemService\DeleteAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\DeleteAnimalPostmortemResponse;
use Proto\AnimalPostmortemService\GetAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\GetAnimalPostmortemResponse;
use Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest;
use Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse;
use Proto\AnimalPostmortemService\UpdateAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\UpdateAnimalPostmortemResponse;

class GrpcAnimalPostmortemService extends AnimalPostmortemServiceStub
{
    public $AnimalPostmortemService;
    /**
     * Create a new class instance.
     */
    public function __construct(){
        $this->AnimalPostmortemService = new AnimalPostmortemService();
    }

    // public function GetAnimalPostmortem(GetAnimalPostmortemRequest $request, ServerContext $context): ?GetAnimalPostmortemResponse {
    //     return $this->AnimalPostmortemService->GetAnimalPostmortem($request, $context);
    // }

    public function GetAnimalPostmortems(GetAnimalPostmortemsRequest $request, ServerContext $context): ?GetAnimalPostmortemsResponse {
        return $this->AnimalPostmortemService->GetAnimalPostmortems($request, $context);
    }

    public function CreateAnimalPostmortem(CreateAnimalPostmortemRequest $request, ServerContext $context): ?CreateAnimalPostmortemResponse {
        return $this->AnimalPostmortemService->CreateAnimalPostmortem($request, $context);
    }

    // public function UpdateAnimalPostmortem(UpdateAnimalPostmortemRequest $request, ServerContext $context): ?UpdateAnimalPostmortemResponse {
    //     return $this->AnimalPostmortemService->UpdateAnimalPostmortem($request, $context);
    // }

    // public function DeleteAnimalPostmortem(DeleteAnimalPostmortemRequest $request, ServerContext $context): ?DeleteAnimalPostmortemResponse {
    //     return $this->AnimalPostmortemService->DeleteAnimalPostmortem($request, $context);
    // }

    

}
