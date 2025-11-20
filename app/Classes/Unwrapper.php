<?php

namespace App\Classes;

use Google\Protobuf\RepeatedField;

class Unwrapper
{

    static function strip($token) {
        return preg_replace('/Bearer\s/i','',$token);
    }

    static function listToArray(RepeatedField $list) : array {
        $array = [];

        foreach ($list as $item) {
            $array = [...$array, $item];
        }
        
        return $array;
    }
}
