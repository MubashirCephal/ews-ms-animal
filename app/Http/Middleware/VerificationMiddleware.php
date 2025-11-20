<?php

namespace App\Http\Middleware;

use App\Classes\ClaimService;
use App\Enums\ActionList;
use App\Classes\Unwrapper;
use App\Enums\MethodMap;
use App\Models\Service;
use App\Models\User;
use Grpc\ServerContext;
use Tymon\JWTAuth\Facades\JWTAuth;

class VerificationMiddleware
{
    static function handle(ServerContext $ctx, MethodMap $method) : bool | array {
        # Check Headers;
        $token = Unwrapper::strip($ctx->clientMetadata()['authorization'][0]);
        $serviceId = Unwrapper::strip($ctx->clientMetadata()['x-service-key'][0]);

        if($serviceId == env('SERVICE_ID')){
            # Decode the token
            if(JWTAuth::setToken($token)->check()){
                $claims = JWTAuth::getPayload()->get('claims');    
    
                // JWT Claim Checker;
                if(ClaimService::verify($claims, $method)){
                    return true;
                }
            }
        }

        return false;
    }

}
