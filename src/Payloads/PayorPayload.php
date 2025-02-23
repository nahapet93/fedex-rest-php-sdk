<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class PayorPayload implements PayloadContract
{
    public function __construct(
        protected ?AddressPayload $address,
        protected ?ContactPayload $contact,
        protected string $accountNumber,
    ) {}

    public function build(): array
    {
        return [
            'responsibleParty' => [
                'accountNumber' => [
                    'value' => $this->accountNumber,
                ],
                'contact' => $this->contact->build(),
                'address' => $this->address->build(),
            ],
        ];
    }
}
