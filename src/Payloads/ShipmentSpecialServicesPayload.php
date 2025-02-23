<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\ShipmentSpecialServiceTypeEnum;

class ShipmentSpecialServicesPayload implements PayloadContract
{
    public function __construct(
        protected array $specialServiceTypes, /** @var ShipmentSpecialServiceTypeEnum[] $specialServiceTypes */
        protected EtdDetailPayload $etdDetail,
        protected ShipmentDryIceDetailPayload $shipmentDryIceDetail,
    ) {}

    public function build(): array
    {
        $payload = [];

        if (! empty($this->specialServiceTypes)) {
            $payload['specialServiceTypes'] = array_map(
                fn (ShipmentSpecialServiceTypeEnum $specialServiceType) => $specialServiceType->value,
                $this->specialServiceTypes
            );
        }

        if (! empty($this->etdDetail)) {
            $payload['etdDetail'] = $this->etdDetail->build();
        }

        if (! empty($this->shipmentDryIceDetail)) {
            $payload['shipmentDryIceDetail'] = $this->shipmentDryIceDetail->build();
        }

        return $payload;
    }
}
