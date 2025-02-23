<?php

namespace SmartDato\FedexRestPhpSdk\Enums;

enum PickupTypeEnum: string
{
    case CONTACT_FEDEX_TO_SCHEDULE = 'CONTACT_FEDEX_TO_SCHEDULE';
    case DROPOFF_AT_FEDEX_LOCATION = 'DROPOFF_AT_FEDEX_LOCATION';
    case USE_SCHEDULED_PICKUP = 'USE_SCHEDULED_PICKUP';
}
