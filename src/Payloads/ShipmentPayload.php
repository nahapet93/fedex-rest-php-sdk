<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use Illuminate\Support\Carbon;
use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\PackagingTypeEnum;
use SmartDato\FedexRestPhpSdk\Enums\PickupTypeEnum;

class ShipmentPayload implements PayloadContract
{
    public function __construct(
        protected ?Carbon $shipDatestamp,
        protected PickupTypeEnum $pickupType, // 'REGULAR_PICKUP',
        protected string $serviceType,
        protected PackagingTypeEnum $packagingType, // 'YOUR_PACKAGING'
        protected float $totalWeight,
        protected ?ValuePayload $totalDeclaredValue,
        protected ShipperPayload $shipper,
        protected array $recipients, /** @var RecipientPayload[] $recipients */
        protected PaymentPayload $shippingChargesPayment,
        protected ?CustomsClearanceDetailPayload $customsClearanceDetail,
        protected LabelSpecificationPayload $labelSpecification,
        protected ?int $totalPackageCount,
        protected array $requestedPackageLineItems, /** @var RequestedPackageLineItemPayload[] $requestedPackageLineItems */
        protected ?ShipmentSpecialServicesPayload $shipmentSpecialServices,
    ) {}

    public function build(): array
    {
        $payload = [
            'pickupType' => $this->pickupType->value,
            'serviceType' => $this->serviceType,
            'packagingType' => $this->packagingType->value,
            'totalWeight' => $this->totalWeight,
            'shipper' => $this->shipper->build(),
            'recipients' => array_map(
                fn (RecipientPayload $recipient) => $recipient->build(),
                $this->recipients
            ),
            'shippingChargesPayment' => $this->shippingChargesPayment->build(),
            'labelSpecification' => $this->labelSpecification->build(),
            'requestedPackageLineItems' => array_map(
                fn (RequestedPackageLineItemPayload $requestedPackageLineItems) => $requestedPackageLineItems->build(),
                $this->requestedPackageLineItems
            ),
        ];

        if (! empty($this->shipDatestamp)) {
            $payload['shipDatestamp'] = $this->shipDatestamp->format('c');
        }

        if (! empty($this->totalDeclaredValue)) {
            $payload['totalDeclaredValue'] = $this->totalDeclaredValue->build();
        }

        if (! empty($this->customsClearanceDetail)) {
            $payload['customsClearanceDetail'] = $this->customsClearanceDetail->build();
        }

        if (! empty($this->totalPackageCount)) {
            $payload['totalPackageCount'] = $this->totalPackageCount;
        }

        if (! empty($this->shipmentSpecialServices)) {
            $payload['shipmentSpecialServices'] = $this->shipmentSpecialServices->build();
        }

        return $payload;
    }
}
