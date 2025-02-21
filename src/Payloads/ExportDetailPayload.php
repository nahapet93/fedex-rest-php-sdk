<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class ExportDetailPayload implements PayloadContract
{
    public function __construct(
        protected string $b13AFilingOption,
    ) {}

    public function build(): array
    {
        return [
            'b13AFilingOption' => $this->b13AFilingOption,
        ];
    }
}
