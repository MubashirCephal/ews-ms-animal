<?php

namespace App\Enums;

enum ScreeningResult : string
{
    //for animals table

    case PASS = 'pass';
    case FAIL = 'fail';
    case PARTIAL = 'partial';
}
