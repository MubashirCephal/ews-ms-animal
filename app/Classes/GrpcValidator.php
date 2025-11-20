<?php

namespace App\Classes;

use Exception;
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

        # Get the array of all the booleans;
        $booleanArray = static::boolCheck(get_class($request));

        if(count($booleanArray) != 0){
            foreach($booleanArray as $bool){
                if(!key_exists($bool, $fixedPayload) || $fixedPayload[$bool] != true){
                    $fixedPayload[$bool] = false;
                }
            }
        }

        return Validator::make($fixedPayload, static::rules())->validate();
    }

    # gRPC for some reason changes field name casing;
    public static function fixCasing(array $data) : array {
        $fixed = [];
        foreach($data as $key => $value) {
            $fixed[str()->snake($key)] = $value;
        }

        return $fixed;
    }

    # Check for casting;
    public static function boolCheck(string $className) : array {
        # Find the model;
        preg_match_all('/Proto\\\([A-z]+)Service\\\/i', $className, $matches);
        $class = 'App\\Models\\'.$matches[1][0];

        try{
            $instance = new $class();
            $booleanArray = [];

            if(!$instance->casts){
                throw new Exception('Casting missing or protected for model : '.$class);
            }

            foreach($instance->casts as $key => $cast){
                if($cast == 'boolean'){
                    $booleanArray = [...$booleanArray, $key];
                }
            }

            return $booleanArray;
        }catch(Exception $e){
            throw $e;
        }

        return [];
    }
}


