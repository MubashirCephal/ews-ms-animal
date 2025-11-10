<?php

namespace App\Http\Middleware;

use App\Classes\ClaimService;
use App\Classes\Unwrapper;
use App\Enums\MethodMap;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class CheckUserClaims
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {

        # Check Headers;
        $token = Unwrapper::strip($request->header('Authorization'));

        # Decode the token
        if(JWTAuth::setToken($token)->check()){
            $claims = JWTAuth::getPayload()->get('claims');    

            // JWT Claim Checker;
            if(ClaimService::verify($claims, MethodMap::tryFrom($request->method()))){
                return $next($request);

            }
        }

        return response()->json(['error' => 'User does not have the required permission to access the service'], 401);
    }
}
