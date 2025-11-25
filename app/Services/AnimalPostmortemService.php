<?php

namespace App\Services;

use App\Enums\MethodMap;
use App\Exceptions\GrpcException;
use App\Http\Middleware\VerificationMiddleware;
use App\Models\AnimalPostmortem;
use App\Interfaces\AnimalPostmortemServiceInterface;
use App\Models\AnimalPostmortemDetail;
use App\Validators\AnimalPostmortem\CreateRequestValidation;
use App\Validators\AnimalPostmortem\DeleteRequestValidation;
use App\Validators\AnimalPostmortem\GetRequestValidation;
use App\Validators\AnimalPostmortem\UpdateRequestValidation;

use Grpc\ServerContext;
use Proto\AnimalPostmortemService\TemplateAnimalPostmortem;

use Proto\AnimalPostmortemService\GetAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\CreateAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\CreateAnimalPostmortemResponse;
use Proto\AnimalPostmortemService\DeleteAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\DeleteAnimalPostmortemResponse;
use Proto\AnimalPostmortemService\GetAnimalPostmortemResponse;
use Proto\AnimalPostmortemService\GetAnimalPostmortemsRequest;
use Proto\AnimalPostmortemService\GetAnimalPostmortemsResponse;
use Proto\AnimalPostmortemService\UpdateAnimalPostmortemRequest;
use Proto\AnimalPostmortemService\UpdateAnimalPostmortemResponse;

class AnimalPostmortemService implements AnimalPostmortemServiceInterface
{


    public function GetAnimalPostmortems(GetAnimalPostmortemsRequest $request, ServerContext $context): ?GetAnimalPostmortemsResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {
            $validated = GetRequestValidation::validate($request);

            $animalPostmortems = AnimalPostmortemDetail::where('animal_id', $validated['animal_id'])->get();

            return new GetAnimalPostmortemsResponse([
                'animal_postmortems' => $this->repeated($animalPostmortems),
                'response_code' => 200
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);

        throw new \Exception('Not implemented');
    }

    public function CreateAnimalPostmortem(CreateAnimalPostmortemRequest $request, ServerContext $context): ?CreateAnimalPostmortemResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {

            $validated = CreateRequestValidation::validate($request->getAnimalPostmortem());
            dd($validated);
            $animalPostmortem = AnimalPostmortem::create(collect($validated)->except('details')->toArray());
            // AnimalPostmortemDetail::create(collect($validated)->only('details')->toArray());
            if (!empty($validated['details'])) {
                // CONVERT OBJECTS TO ARRAYS HERE
                $detailsAsArrays = collect($validated['details'])->map(function ($item) {
                    return (array) $item; // <--- This fixes the stdClass error
                })->toArray();

                // Now this will work
                $animalPostmortem->details()->createMany($detailsAsArrays);
            }
            return new CreateAnimalPostmortemResponse($animalPostmortem->toResource()->dto(201));
        }
        abort(401, GrpcException::UNAUTHORIZED);
        throw new \Exception('Not implemented');
    }

    // public function UpdateAnimalPostmortem(UpdateAnimalPostmortemRequest $request, ServerContext $context): ?UpdateAnimalPostmortemResponse
    // {
    //     $validated = UpdateRequestValidation::validate($request->getAnimalPostmortem());
    //     $animalPostmortem = AnimalPostmortem::findOrFail($validated['id']);
    //     $animalPostmortem->update($validated);

    //     return new UpdateAnimalPostmortemResponse($animalPostmortem->toResource()->dto(201));
    //     throw new \Exception('Not implemented');
    // }

    // public function DeleteAnimalPostmortem(DeleteAnimalPostmortemRequest $request, ServerContext $context): ?DeleteAnimalPostmortemResponse
    // {
    //     $validated = DeleteRequestValidation::validate($request);
    //     $animalPostmortem = AnimalPostmortem::findOrFail($validated['id']);
    //     $animalPostmortem->delete();

    //     return new DeleteAnimalPostmortemResponse([
    //         'message' => 'AnimalPostmortem Deleted Successfully',
    //         'response_code' => 200
    //     ]);

    //     throw new \Exception('Not implemented');
    // }

    protected function repeated($items): array
    {
        $repeated = [];

        foreach ($items as $item) {
            $repeated = [...$repeated, $item->toResource()->dto()['animal_postmortem']];
        }

        return $repeated;
    }
}
