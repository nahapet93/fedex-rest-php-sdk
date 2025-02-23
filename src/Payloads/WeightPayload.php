<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\WeightUnitEnum;

class WeightPayload implements PayloadContract
{
    public function __construct(
        protected WeightUnitEnum $units,
        protected float $value
    ) {}

    public function build(): array
    {
        return [
            'units' => $this->units->value,
            'value' => $this->value,
        ];
    }
}
