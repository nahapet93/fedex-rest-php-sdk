<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class ValuePayload implements PayloadContract
{
    public function __construct(
        protected string $currency,
        protected float $amount
    ) {}

    public function build(): array
    {
        return [
            'amount' => $this->amount,
            'currency' => $this->currency,
        ];
    }
}
