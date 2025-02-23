<?php

namespace SmartDato\FedexRestPhpSdk\Enums;

enum B13AFilingOptionEnum: string
{
    case NOT_REQUIRED = 'NOT_REQUIRED';
    case MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';
    case FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';
    case SUMMARY_REPORTING = 'SUMMARY_REPORTING';
    case FEDEX_TO_STAMP = 'FEDEX_TO_STAMP';
}
