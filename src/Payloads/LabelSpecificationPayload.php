<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class LabelSpecificationPayload implements PayloadContract
{
    public function __construct(
        protected ?string $labelFormatType,
        protected ?string $imageType,
        protected string $labelStockType,
        protected ?string $labelPrintingOrientation,
        protected ?string $labelOrder,
    ) {}

    public function build(): array
    {
        $payload = [
            'labelStockType' => $this->labelStockType,
        ];

        if (! empty($this->labelFormatType)) {
            $payload['labelFormatType'] = $this->labelFormatType;
        }

        if (! empty($this->imageType)) {
            $payload['imageType'] = $this->imageType;
        }

        if (! empty($this->labelPrintingOrientation)) {
            $payload['labelPrintingOrientation'] = $this->labelPrintingOrientation;
        }

        if (! empty($this->labelOrder)) {
            $payload['labelOrder'] = $this->labelOrder;
        }

        return $payload;
    }
}
