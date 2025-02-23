<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\CustomerReferenceTypeEnum;

class CustomerReferencePayload implements PayloadContract
{
    public function __construct(
        protected CustomerReferenceTypeEnum $customerReferenceType,
        protected string $value,
    ) {}

    public function build(): array
    {
        return [
            'customerReferenceType' => $this->customerReferenceType->value,
            'value' => $this->value,
        ];
    }
}
