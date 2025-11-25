<?php

namespace App\Services;

use App\Enums\MethodMap;
use App\Exceptions\GrpcException;
use App\Http\Middleware\VerificationMiddleware;
use App\Interfaces\AnimalScreeningServiceInterface;
use App\Models\AnimalScreening;
use App\Validators\AnimalFacility\GetRequestValidation;
use App\Validators\AnimalScreening\CreateRequestValidation;
use App\Validators\AnimalScreening\UpdateRequestValidation;
use Grpc\ServerContext;
use Proto\AnimalScreeningService\CreateAnimalScreeningRequest;
use Proto\AnimalScreeningService\CreateAnimalScreeningResponse;
use Proto\AnimalScreeningService\DeleteAnimalScreeningRequest;
use Proto\AnimalScreeningService\DeleteAnimalScreeningResponse;
use Proto\AnimalScreeningService\GetAnimalScreeningsRequest;
use Proto\AnimalScreeningService\GetAnimalScreeningsResponse;
use Proto\AnimalScreeningService\TemplateAnimalScreening;
use Proto\AnimalScreeningService\UpdateAnimalScreeningRequest;
use Proto\AnimalScreeningService\UpdateAnimalScreeningResponse;
use Proto\AnimalService\Animal;

class AnimalScreeningService implements AnimalScreeningServiceInterface
{
    public function  GetAnimalScreenings(GetAnimalScreeningsRequest $request, ServerContext $context): ?GetAnimalScreeningsResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {
            $validated = GetRequestValidation::validate($request);
            $animalScreening = AnimalScreening::with([
                'animal_screening_diseases',
                'animal_screening_symptoms'
            ])
                ->where('animal_id', $validated['animal_id'])
                ->get();
            $animalScreening = $this->repeated($animalScreening);
            return new GetAnimalScreeningsResponse([
                'animal_screenings' => $animalScreening,
                'response_code' => 200
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function  CreateAnimalScreening(CreateAnimalScreeningRequest $request, ServerContext $context): ?CreateAnimalScreeningResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::CREATE)) {
            $validated = CreateRequestValidation::validate($request->getAnimalScreening());
            $animalScreening = AnimalScreening::create($validated);

            $animalScreening->animal_screening_diseases()->createMany(
                collect($validated['disease_ids'] ?? [])->map(fn($disease) => ['disease_id' => $disease])->toArray()
            );
            $animalScreening->animal_screening_symptoms()->createMany(
                collect($validated['symptom_ids'] ?? [])->map(fn($symptom) => ['symptom_id' => $symptom])->toArray()
            );
            return new CreateAnimalScreeningResponse($animalScreening->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function  UpdateAnimalScreening(UpdateAnimalScreeningRequest $request, ServerContext $context): ?UpdateAnimalScreeningResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::UPDATE)) {


            $validated = UpdateRequestValidation::validate($request->getAnimalScreening());
            $animalScreening = AnimalScreening::findOrFail($validated['id']);
            $animalScreening->update($validated);
            if (isset($validated['disease_ids'])) {
                // 1. Delete ALL existing diseases for this screening
                $animalScreening->animal_screening_diseases->delete();

                // 2. Re-create the list from scratch
                $data = collect($validated['disease_ids'])
                    ->map(fn($id) => ['disease_id' => $id])
                    ->toArray();

                $animalScreening->animal_screening_diseases()->createMany($data);
            }
            if ($validated['symptom_ids']) {
                // 1. Delete ALL existing diseases for this screening
                $animalScreening->animal_screening_symptoms()->delete();

                // 2. Re-create the list from scratch
                $data = collect($validated['symptom_ids'])
                    ->map(fn($id) => ['symptom_id' => $id])
                    ->toArray();

                $animalScreening->animal_screening_symptoms()->createMany($data);
            }
            return new UpdateAnimalScreeningResponse($animalScreening->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function  DeleteAnimalScreening(DeleteAnimalScreeningRequest $request, ServerContext $context): ?DeleteAnimalScreeningResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::DELETE)) {

            $validated = GetRequestValidation::validate($request);
            $animalScreening = AnimalScreening::where('animal_id', $validated['animal_id']);
            $animalScreening->animal_screening_symptoms()->delete();
            $animalScreening->animal_screening_diseases->delete();
            $animalScreening->delete();
            return new DeleteAnimalScreeningResponse([
                'success' => true,
                'response_code' => 200
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    protected function repeated($items): array
    {
        $repeated = [];

        foreach ($items as $item) {
            $repeated = [...$repeated, $item->toResource()->dto()['animal_screening']];
        }
        return $repeated;
    }
}
