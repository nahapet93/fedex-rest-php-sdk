<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class TotalDeclaredValuePayload implements PayloadContract
{
    public function __construct(
    ) {}

    public function build(): array
    {
        return [];
    }
}
