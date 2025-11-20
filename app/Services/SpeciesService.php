<?php

namespace App\Services;

use App\Enums\MethodMap;
use App\Exceptions\GrpcException;
use App\Http\Middleware\VerificationMiddleware;
use App\Interfaces\SpeciesServiceInterface;
use App\Models\Species;
use App\Validators\Species\GrpcCreateSpeciesRequestValidation;
use App\Validators\Species\GrpcSpeciesByIdRequestValidation;
use App\Validators\Species\UpdateRequestValidation;
use Grpc\ServerContext;
use Proto\SpeciesService\CreateSpeciesRequest;
use Proto\SpeciesService\GetSpeciesRequest;
use Proto\SpeciesService\GetSpeciesResponse;
use Proto\SpeciesService\TemplateSpecies;
use Proto\SpeciesService\UpdateSpeciesRequest;
use Exception;
use Proto\SpeciesService\CreateSpeciesResponse;
use Proto\SpeciesService\DeleteSpeciesRequest;
use Proto\SpeciesService\DeleteSpeciesResponse;
use Proto\SpeciesService\GetSpeciesByIdRequest;
use Proto\SpeciesService\GetSpeciesByIdResponse;
use Proto\SpeciesService\UpdateSpeciesResponse;

use function Laravel\Prompts\info;

class SpeciesService implements SpeciesServiceInterface
{
    // Implement the methods defined in SpeciesServiceInterface here
    public function GetSpecies(GetSpeciesRequest $request, ServerContext $context): ?GetSpeciesResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {
            $species = $this->repeated(Species::get());
            return new GetSpeciesResponse([
                'species' => $species,
                'response_code' => 200,
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function GetSpeciesById(GetSpeciesByIdRequest $request, ServerContext $context): ?GetSpeciesByIdResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {

            $validated = GrpcSpeciesByIdRequestValidation::validate($request);
            $species = Species::find($validated['id']);
            return new GetSpeciesByIdResponse($species->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function CreateSpecies(CreateSpeciesRequest $request, ServerContext $context): ?CreateSpeciesResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::CREATE)) {
            $validated = GrpcCreateSpeciesRequestValidation::validate($request->getSpecies());
            $validated['status'] = $validated['status'] ?? false;
            $species = Species::create($validated);
            return new CreateSpeciesResponse($species->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function UpdateSpecies(UpdateSpeciesRequest $request, ServerContext $context): ?UpdateSpeciesResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::UPDATE)) {
            $validated = UpdateRequestValidation::validate($request->getSpecies());
            $species = Species::findOrFail($validated['id']);
            $species->update($validated);
            return new UpdateSpeciesResponse($species->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function DeleteSpecies(DeleteSpeciesRequest $request, ServerContext $context): ?DeleteSpeciesResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::DELETE)) {
            $validated = GrpcSpeciesByIdRequestValidation::validate($request);
            $species = Species::findOrFail($validated['id']);
            $species->delete();
            return new DeleteSpeciesResponse(['success' => true, 'response_code' => 200]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    protected function repeated($items): array
    {
        $repeated = [];

        foreach ($items as $item) {
            $repeated = [...$repeated, new TemplateSpecies($item->except('created_at', 'updated_at'))];
        }
        return $repeated;
        // return count($repeated)>0 ?$repeated: throw new Exception('No items found');
    }
}
