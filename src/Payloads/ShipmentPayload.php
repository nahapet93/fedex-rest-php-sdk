<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use Illuminate\Support\Carbon;
use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class ShipmentPayload implements PayloadContract
{
    public function __construct(
        protected ?Carbon $shipDatestamp,
        protected string $pickupType, // 'REGULAR_PICKUP',
        protected string $serviceType,
        protected string $packagingType, // YOUR_PACKAGING
        protected float $totalWeight,
        protected float $weight,
        protected ?ValuePayload $totalDeclaredValue,
        protected ShipperPayload $shipper,
        protected array $recipients, /** @var RecipientPayload[] $recipients */
        protected PaymentPayload $shippingChargesPayment,
        protected ?CustomsClearanceDetailPayload $customsClearanceDetail,
        protected LabelSpecificationPayload $labelSpecification,
        protected CustomerSpecifiedDetailPayload $customerSpecifiedDetail,
        protected int $totalPackageCount,
        protected array $requestedPackageLineItems, /** @var RequestedPackageLineItemsPayload[] $requestedPackageLineItems */
        protected ?ShipmentSpecialServicesPayload $shipmentSpecialServices,
    ) {}

    public function build(): array
    {
        return [];
    }
}
