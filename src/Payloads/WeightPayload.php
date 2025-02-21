<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class WeightPayload implements PayloadContract
{
    public function __construct(
        protected string $units,
        protected float $value
    ) {}

    public function build(): array
    {
        return [
            'units' => $this->units,
            'value' => $this->value
        ];
    }
}
