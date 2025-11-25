<?php

namespace App\Services;

use App\Enums\MethodMap;
use App\Exceptions\GrpcException;
use App\Http\Middleware\VerificationMiddleware;
use App\Interfaces\AnimalVaccinationServiceInterface;
use App\Models\AnimalVaccination;
use App\Validators\AnimalFacility\GetRequestValidation;
use App\Validators\AnimalVaccination\CreateRequestValidation;
use App\Validators\AnimalVaccination\GetRequestValidation as AnimalVaccinationGetRequestValidation;
use App\Validators\AnimalVaccination\UpdateRequestValidation;
use Grpc\ServerContext;
use Proto\AnimalVaccinationService\CreateAnimalVaccinationRequest;
use Proto\AnimalVaccinationService\CreateAnimalVaccinationResponse;
use Proto\AnimalVaccinationService\DeleteAnimalVaccinationRequest;
use Proto\AnimalVaccinationService\DeleteAnimalVaccinationResponse;
use Proto\AnimalVaccinationService\GetAnimalVaccinationsRequest;
use Proto\AnimalVaccinationService\GetAnimalVaccinationsResponse;
use Proto\AnimalVaccinationService\UpdateAnimalVaccinationRequest;
use Proto\AnimalVaccinationService\UpdateAnimalVaccinationResponse;

class AnimalVaccinationService implements AnimalVaccinationServiceInterface
{
    public function GetAnimalVaccinations(GetAnimalVaccinationsRequest $request, ServerContext $context): ?GetAnimalVaccinationsResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {

            $validated = GetRequestValidation::validate($request);
            $animalVaccination = AnimalVaccination::where('animal_id', $validated['animal_id'])->get();

            return new GetAnimalVaccinationsResponse([
                'animal_vaccinations' => $this->repeated($animalVaccination),
                'response_code' => 200
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
        throw new \Exception('Not implemented');
    }
    public function CreateAnimalVaccination(CreateAnimalVaccinationRequest $request, ServerContext $context): ?CreateAnimalVaccinationResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::CREATE)) {

            $validated = CreateRequestValidation::validate($request->getAnimalVaccination());
            $animalVaccination = AnimalVaccination::create($validated);
            // return new CreateAnimalFacilityResponse($animalFacility->toResource()->dto(201));

            return new CreateAnimalVaccinationResponse($animalVaccination->toResource()->dto(201));
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function UpdateAnimalVaccination(UpdateAnimalVaccinationRequest $request, ServerContext $context): UpdateAnimalVaccinationResponse
    {

        if (VerificationMiddleware::handle($context, MethodMap::CREATE)) {
            $validated = UpdateRequestValidation::validate($request->getAnimalVaccination());
            $animalVaccination = AnimalVaccination::findOrFail( $validated['id']);
            $animalVaccination->update($validated);
            return new UpdateAnimalVaccinationResponse($animalVaccination->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function DeleteAnimalVaccination(DeleteAnimalVaccinationRequest $request, ServerContext $context): ?DeleteAnimalVaccinationResponse
    {
        $validated = AnimalVaccinationGetRequestValidation::validate($request);
        $animalVaccination = AnimalVaccination::where('id', $validated['id']);
        $animalVaccination->delete();
        return new DeleteAnimalVaccinationResponse(['success' => true, 'response_code' => 200]);
    }
    protected function repeated($items): array
    {
        $repeated = [];

        foreach ($items as $item) {
            $repeated = [...$repeated, $item->toResource()->dto()['animal_vaccination']];
        }

        return $repeated;
    }
}
