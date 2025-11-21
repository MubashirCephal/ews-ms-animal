<?php

namespace App\Services;

use App\Enums\MethodMap;
use App\Exceptions\GrpcException;
use App\Http\Middleware\VerificationMiddleware;
use App\Http\Resources\AnimalResource;
use App\Interfaces\AnimalServiceInterface;
use App\Models\Animal;
use App\Validators\Animal\CreateRequestValidation;
use App\Validators\Animal\GetRequestValidation;
use App\Validators\Animal\UpdateRequestValidation;
use Exception;
use GrahamCampbell\ResultType\Success;
use Grpc\ServerContext;
use Proto\AnimalService\CreateAnimalRequest;
use Proto\AnimalService\CreateAnimalResponse;
use Proto\AnimalService\DeleteAnimalRequest;
use Proto\AnimalService\DeleteAnimalResponse;
use Proto\AnimalService\GetAnimalRequest;
use Proto\AnimalService\GetAnimalResponse;
use Proto\AnimalService\GetAnimalsRequest;
use Proto\AnimalService\GetAnimalsResponse;
use Proto\AnimalService\TemplateAnimal;
use Proto\AnimalService\UpdateAnimalRequest;
use Proto\AnimalService\UpdateAnimalResponse;

class AnimalService implements AnimalServiceInterface
{
    public function getAnimals(GetAnimalsRequest $request, ServerContext $context): ?GetAnimalsResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {

            $animals = $this->repeated(Animal::get());

            return new GetAnimalsResponse([
                'animals' => $animals,
                'response_code' => 200
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function getAnimal(GetAnimalRequest $request, ServerContext $context): ?GetAnimalResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {
            $validated = GetRequestValidation::validate($request);


            $animal = Animal::findOrFail($validated['id']);
            return new GetAnimalResponse($animal->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function createAnimal(CreateAnimalRequest $request, ServerContext $context): ?CreateAnimalResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::CREATE)) {
            $validated = CreateRequestValidation::validate($request->getAnimal());
            $animal = Animal::create($validated);
            return new CreateAnimalResponse($animal->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function updateAnimal(UpdateAnimalRequest $request, ServerContext $context): ?UpdateAnimalResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::UPDATE)) {
            $validated = UpdateRequestValidation::validate($request->getAnimal());

            $animal = Animal::findOrFail($validated['id']);
            $animal->update($validated);
            return new UpdateAnimalResponse($animal->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function deleteAnimal(DeleteAnimalRequest $request, ServerContext $context): ?DeleteAnimalResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::DELETE)) {
            $validated = GetRequestValidation::validate($request);

            $animal = Animal::findOrFail($validated['id']);
            $animal->delete();
            return new DeleteAnimalResponse([
                'response_code' => 200,
                'success' => true,
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    protected function repeated($items): array
    {
        $repeated = [];

        foreach ($items as $item) {
            $repeated = [...$repeated, new TemplateAnimal($item->except('created_at', 'updated_at'))];
        }

        return $repeated;
    }
}
