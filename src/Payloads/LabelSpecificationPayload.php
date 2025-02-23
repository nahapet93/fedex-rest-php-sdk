<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\ImageTypeEnum;
use SmartDato\FedexRestPhpSdk\Enums\LabelFormatTypeEnum;
use SmartDato\FedexRestPhpSdk\Enums\LabelOrderEnum;
use SmartDato\FedexRestPhpSdk\Enums\LabelPrintingOrientationEnum;
use SmartDato\FedexRestPhpSdk\Enums\LabelStockTypeEnum;

class LabelSpecificationPayload implements PayloadContract
{
    public function __construct(
        protected ?LabelFormatTypeEnum $labelFormatType,
        protected ImageTypeEnum $imageType,
        protected LabelStockTypeEnum $labelStockType,
        protected ?LabelPrintingOrientationEnum $labelPrintingOrientation,
        protected ?LabelOrderEnum $labelOrder,
        protected ?CustomerSpecifiedDetailPayload $customerSpecifiedDetail,
    ) {}

    public function build(): array
    {
        $payload = [
            'labelStockType' => $this->labelStockType->value,
            'imageType' => $this->imageType->value,
        ];

        if (! empty($this->labelFormatType)) {
            $payload['labelFormatType'] = $this->labelFormatType->value;
        }

        if (! empty($this->labelPrintingOrientation)) {
            $payload['labelPrintingOrientation'] = $this->labelPrintingOrientation->value;
        }

        if (! empty($this->labelOrder)) {
            $payload['labelOrder'] = $this->labelOrder->value;
        }

        if (! empty($this->customerSpecifiedDetail)) {
            $payload['customerSpecifiedDetail'] = $this->customerSpecifiedDetail->build();
        }

        return $payload;
    }
}
