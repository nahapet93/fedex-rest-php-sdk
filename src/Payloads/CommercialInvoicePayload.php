<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class CommercialInvoicePayload implements PayloadContract
{
    public function __construct(
        protected string $termsOfSale
    ) {}

    public function build(): array
    {
        return [
            'termsOfSale' => $this->termsOfSale,
        ];
    }
}
