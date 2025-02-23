<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\CurrencyEnum;

class ValuePayload implements PayloadContract
{
    public function __construct(
        protected CurrencyEnum $currency,
        protected float $amount
    ) {}

    public function build(): array
    {
        return [
            'amount' => $this->amount,
            'currency' => $this->currency->value,
        ];
    }
}
