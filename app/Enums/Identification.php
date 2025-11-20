<?php

namespace App\Enums;

enum Identification : string
{
    //for animals table

    case RFID = 'RFID';
    case BRANDING = 'branding';
    case EAR_TAG = 'ear_tag';
    case SHAFTS = 'shafts';
    case MICROCHIP = 'microchip';
    case SITES = 'SITES';
    case PLASTIC_NUMBERS = 'plastic_numbers';
}
