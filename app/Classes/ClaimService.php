<?php

namespace App\Classes;

use App\Enums\MethodMap;

class ClaimService
{

    static function verify(array $claims, MethodMap $method) : bool { 
        $action = str()->lower($method->name);
        $allowed = in_array(env('SERVICE_PREFIX').':'.$action, $claims);
        return $allowed;
    }
}
