<?php

namespace SmartDato\FedexRestPhpSdk\Enums;

enum CustomerReferenceTypeEnum: string
{
    case CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    case DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
    case INVOICE_NUMBER = 'INVOICE_NUMBER';
    case P_O_NUMBER = 'P_O_NUMBER';
    case INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
    case RMA_ASSOCIATION = 'RMA_ASSOCIATION';
}
