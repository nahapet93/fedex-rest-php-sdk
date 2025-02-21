<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class RequestedPackageLineItemsPayload implements PayloadContract
{
    public function __construct(
        protected WeightPayload $weight,
        protected ?int $sequenceNumber,
        protected ?int $groupPackageCount,
        protected ?DimensionsPayload $dimensions,
        protected ?array $customerReferences, /** @var CustomerReferencePayload[] $customerReferences */
    ) {}

    public function build(): array
    {
        return [];
    }
}
