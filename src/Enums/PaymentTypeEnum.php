<?php

namespace SmartDato\FedexRestPhpSdk\Enums;

enum PaymentTypeEnum: string
{
    case SENDER = 'SENDER';
    case RECIPIENT = 'RECIPIENT';
    case THIRD_PARTY = 'THIRD_PARTY';
    case COLLECT = 'COLLECT';
}
