<?php

namespace App\Services;

use App\Enums\MethodMap;
use App\Http\Middleware\VerificationMiddleware;
use App\Interfaces\BreedServiceInterface;
use App\Models\Breed;
use App\Validators\Breed\CreateRequestValidation;
use Exception;
use App\Exceptions\GrpcException;
use App\Validators\Breed\GetRequestValidation;
use App\Validators\Breed\UpdateRequestValidation;
use Grpc\ServerContext;
use Proto\BreedService\CreateBreedRequest;
use Proto\BreedService\CreateBreedResponse;
use Proto\BreedService\DeleteBreedRequest;
use Proto\BreedService\DeleteBreedResponse;
use Proto\BreedService\GetBreedRequest;
use Proto\BreedService\GetBreedResponse;
use Proto\BreedService\GetBreedsRequest;
use Proto\BreedService\GetBreedsResponse;
use Proto\BreedService\TemplateBreed;
use Proto\BreedService\UpdateBreedRequest;
use Proto\BreedService\UpdateBreedResponse;

class BreedService implements BreedServiceInterface
{

    public function GetBreeds(GetBreedsRequest $request, ServerContext $context): ?GetBreedsResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {
            $breeds = $this->repeated(Breed::all());
            return new GetBreedsResponse([
                'breeds' => $breeds,
                'response_code' => 200,
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function GetBreed(GetBreedRequest $request, ServerContext $context): ?GetBreedResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::READ)) {
            $validated = GetRequestValidation::validate($request);
            $breed = Breed::findOrFail($validated['id']);
            return new GetBreedResponse($breed->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function CreateBreed(CreateBreedRequest $request, ServerContext $context): ?CreateBreedResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::CREATE)) {
            $validated = CreateRequestValidation::validate($request->getBreed());
            $validated['status'] = $validated['status'] ?? false;
            $breed = Breed::create($validated);
            return new CreateBreedResponse($breed->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function UpdateBreed(UpdateBreedRequest $request, ServerContext $context): ?UpdateBreedResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::UPDATE)) {
            $validated = UpdateRequestValidation::validate($request->getBreed());

            $breed = Breed::findOrFail($validated['id']);
            $breed->update($validated);
            return new UpdateBreedResponse($breed->toResource()->dto());
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    public function DeleteBreed(DeleteBreedRequest $request, ServerContext $context): ?DeleteBreedResponse
    {
        if (VerificationMiddleware::handle($context, MethodMap::DELETE)) {
            $validated = GetRequestValidation::validate($request);
            $breed = Breed::findOrFail($validated['id']);
            $breed->delete();
            return new DeleteBreedResponse([
                'success' => true,
                'response_code' => 200,
            ]);
        }
        abort(401, GrpcException::UNAUTHORIZED);
    }
    protected function repeated($items): array
    {
        $repeated = [];

        foreach ($items as $item) {
            $repeated = [...$repeated, new TemplateBreed($item->except('created_at', 'updated_at'))];
        }
        return $repeated;
        // return count($repeated)>0 ?$repeated: throw new Exception('No items found');
    }
}
