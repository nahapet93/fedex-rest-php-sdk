<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\LengthUnitEnum;

class DimensionsPayload implements PayloadContract
{
    public function __construct(
        protected int $length,
        protected int $width,
        protected int $height,
        protected LengthUnitEnum $units,
    ) {}

    public function build(): array
    {
        return [
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'units' => $this->units->value,
        ];
    }
}
