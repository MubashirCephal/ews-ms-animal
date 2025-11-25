<?php

namespace App\Enums;

enum Observation: string
{
    //FOR ANIMAL POSTMORTEM TABLE
    case LAMENESS = 'Lameness';
    case LABORED_BREATHING = 'Labored breathing';
    case COUGHING = 'Coughing';
    case NASAL_DISCHARGE = 'Nasal discharge';
    case AGGRESSION = 'Aggression';
    case EXCESSIVE_VOCALIZATION = 'Excessive vocalization';
    case SIGNS_OF_DISTRESS = 'Signs of distress';
    case INAPPETENCE = 'Inappetence';
    case DEHYDRATION = 'Dehydration';
    case VISIBLE_INJURIES = 'Visible injuries';
    case OPEN_WOUNDS = 'Open wounds';
    case BLEEDING = 'Bleeding';
    case ABNORMAL_DISCHARGES_IN_THE_EYES = 'Abnormal discharges in the eyes';
    case ABNORMAL_DISCHARGES_IN_THE_NOSE = 'Abnormal discharges in the nose';
    case ABNORMAL_DISCHARGES_IN_THE_RECTUM = 'Abnormal discharges in the rectum';
    case TREMORS_OR_SHAKING = 'Tremors or shaking';
}
