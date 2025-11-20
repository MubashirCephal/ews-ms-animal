<?php

namespace App\Classes;

use Google\Protobuf\Internal\Message;
use Illuminate\Support\Facades\Validator;

abstract class GrpcValidator {
    abstract public static function rules() : array;

    public static function validate(?Message $request) : array {
        if(!$request){
            throw new \Exception('Request object missing, check for wrapper object');
        }

        $data = (array) json_decode($request->serializeToJsonString());
        $fixedPayload = static::fixCasing($data);
        return Validator::make($fixedPayload, static::rules())->validate();
    }

    # gRPC for some reason changes field name - casing;
    public static function fixCasing(array $data) : array {
        $fixed = [];
        foreach($data as $key => $value) {
            $fixed[str()->snake($key)] = $value;
        }

        return $fixed;
    }
}