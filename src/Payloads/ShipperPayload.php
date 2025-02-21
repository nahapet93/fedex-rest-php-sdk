<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use Illuminate\Support\Carbon;
use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class ShipperPayload implements PayloadContract
{
    public function __construct(
    ) {}

    public function build(): array
    {
        return [];
    }
}
