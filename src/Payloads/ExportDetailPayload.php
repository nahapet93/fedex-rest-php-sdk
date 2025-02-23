<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\B13AFilingOptionEnum;

class ExportDetailPayload implements PayloadContract
{
    public function __construct(
        protected B13AFilingOptionEnum $b13AFilingOption,
    ) {}

    public function build(): array
    {
        return [
            'b13AFilingOption' => $this->b13AFilingOption->value,
        ];
    }
}
