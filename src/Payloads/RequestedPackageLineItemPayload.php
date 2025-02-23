<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class RequestedPackageLineItemPayload implements PayloadContract
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
        $payload = [
            'weight' => $this->weight->build(),
        ];

        if (! empty($this->sequenceNumber)) {
            $payload['sequenceNumber'] = $this->sequenceNumber;
        }

        if (! empty($this->groupPackageCount)) {
            $payload['groupPackageCount'] = $this->groupPackageCount;
        }

        if (! empty($this->dimensions)) {
            $payload['dimensions'] = $this->dimensions->build();
        }

        if (! empty($this->customerReferences)) {
            $payload['customerReferences'] = array_map(
                fn (CustomerReferencePayload $customerReference) => $customerReference->build(),
                $this->customerReferences
            );
        }

        return $payload;
    }
}
