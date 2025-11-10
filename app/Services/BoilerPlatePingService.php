<?php

namespace App\Services;

use App\Enums\ActionList;
use App\Enums\MethodMap;
use App\Http\Middleware\VerificationMiddleware;
use Grpc\ServerContext;
use Illuminate\Foundation\Inspiring;
use Proto\BoilerService\BoilerServiceStub;
use Proto\BoilerService\PingRequest;
use Proto\BoilerService\PingResponse;

class BoilerPlatePingService extends BoilerServiceStub
{
   public function Ping(PingRequest $request, ServerContext $context): ?PingResponse {
    if(VerificationMiddleware::handle($context, MethodMap::CREATE)){
        return new PingResponse(['message' => 'Pong : '. Inspiring::quotes()[rand(0, 41)]]);
    }

    abort(401, 'Unauthenticated');
   }
}
