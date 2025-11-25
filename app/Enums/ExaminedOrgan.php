<?php

namespace App\Enums;

enum ExaminedOrgan : string
{
    //FOR ANIMAL POSTMORTEM TABLE
    case SKIN_AND_COAT = 'Skin and Coat';
    case EYES = 'Eyes';
    case EARS = 'Ears';
    case MOUTH_AND_TEETH = 'Mouth and Teeth';
    case HEART = 'Heart';
    case LUNGS = 'Lungs';
    case ABDOMEN = 'Abdomen';
    case MUSCULOSKELETAL_SYSTEM = 'Musculoskeletal System';
    case REPRODUCTIVE_ORGANS = 'Reproductive Organs';
    case NERVOUS_SYSTEM = 'Nervous System';
    case LYMPH_NODES = 'Lymph Nodes';
}
