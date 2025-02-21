<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class CustomerReferencePayload implements PayloadContract
{
    public function __construct(
        protected string $customerReferenceType,
        protected string $value,
    ) {}

    public function build(): array
    {
        return [
            'customerReferenceType' => $this->customerReferenceType,
            'value' => $this->value,
        ];
    }
}
