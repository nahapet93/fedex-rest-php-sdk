<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class AddressPayload implements PayloadContract
{
    public function __construct(
        protected array $streetLines, /** @var string[] $streetLines */
        protected string $city,
        protected ?string $stateOrProvinceCode,
        protected ?string $postalCode,
        protected string $countryCode,
        protected ?bool $residential,
    ) {}

    public function build(): array
    {
        $payload = [
            'streetLines' => $this->streetLines,
            'city' => $this->city,
            'countryCode' => $this->countryCode,
        ];

        if (! empty($this->stateOrProvinceCode)) {
            $payload['stateOrProvinceCode'] = $this->stateOrProvinceCode;
        }

        if (! empty($this->postalCode)) {
            $payload['postalCode'] = $this->postalCode;
        }

        if (! empty($this->residential)) {
            $payload['residential'] = $this->residential;
        }

        return $payload;
    }
}
