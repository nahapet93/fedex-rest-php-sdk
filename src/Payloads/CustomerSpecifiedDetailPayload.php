<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\MaskedDataEnum;

class CustomerSpecifiedDetailPayload implements PayloadContract
{
    public function __construct(
        protected array $maskedData, /** @var MaskedDataEnum[] $maskedData */
    ) {}

    public function build(): array
    {
        return [
            'maskedData' => array_map(
                fn (MaskedDataEnum $maskedData) => $maskedData->value,
                $this->maskedData,
            )
        ];
    }
}
