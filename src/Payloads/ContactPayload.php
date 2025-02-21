<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class ContactPayload implements PayloadContract
{
    public function __construct(
        protected ?string $personName,
        protected string $phoneNumber,
        protected ?string $companyName,
    ) {}

    public function build(): array
    {
        $payload = [
            'phoneNumber' => $this->phoneNumber,
        ];

        if (! empty($this->personName)) {
            $payload['personName'] = $this->personName;
        }

        if (! empty($this->companyName)) {
            $payload['companyName'] = $this->companyName;
        }

        return $payload;
    }
}
