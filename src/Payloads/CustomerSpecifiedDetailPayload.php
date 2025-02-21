<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class CustomerSpecifiedDetailPayload implements PayloadContract
{
    public function __construct(
        private array $maskedData, /** @var string[] $maskedData */
    ) {}

    public function build(): array
    {
        return [
            'maskedData' => $this->maskedData,
        ];
    }
}
