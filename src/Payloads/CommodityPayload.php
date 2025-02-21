<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class CommodityPayload implements PayloadContract
{
    public function __construct(
        protected ?int $numberOfPieces,
        protected ?string $exportLicenseNumber,
        protected ?string $description,
        protected ?string $countryOfManufacture,
        protected ?WeightPayload $weight,
        protected ?int $quantity,
        protected ?string $quantityUnits,
        protected ?ValuePayload $unitPrice,
        protected ?ValuePayload $customsValue,
    ) {}

    public function build(): array
    {
        $payload = [
            'description' => $this->description,
        ];

        if (! empty($this->numberOfPieces)) {
            $payload['numberOfPieces'] = $this->numberOfPieces;
        }

        if (! empty($this->exportLicenseNumber)) {
            $payload['exportLicenseNumber'] = $this->exportLicenseNumber;
        }

        if (! empty($this->description)) {
            $payload['description'] = $this->description;
        }

        if (! empty($this->countryOfManufacture)) {
            $payload['countryOfManufacture'] = $this->countryOfManufacture;
        }

        if (! empty($this->weight)) {
            $payload['weight'] = $this->weight->build();
        }

        if (! empty($this->quantity)) {
            $payload['quantity'] = $this->quantity;
        }

        if (! empty($this->quantityUnits)) {
            $payload['quantityUnits'] = $this->quantityUnits;
        }

        if (! empty($this->unitPrice)) {
            $payload['unitPrice'] = $this->unitPrice->build();
        }

        if (! empty($this->customsValue)) {
            $payload['customsValue'] = $this->customsValue->build();
        }

        return $payload;
    }
}
