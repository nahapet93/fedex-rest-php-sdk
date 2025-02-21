<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class CustomsClearanceDetailPayload implements PayloadContract
{
    public function __construct(
        protected ?PaymentPayload $dutiesPayment,
        protected ?bool $isDocumentOnly,
        protected ?ValuePayload $totalCustomsValue,
        protected CommercialInvoicePayload $commercialInvoice,
        protected array $commodities, /** @var CommodityPayload[] $commodities */
        protected ?ExportDetailPayload $exportDetail,
    ) {}

    public function build(): array
    {
        $payload = [
            'commercialInvoice' => $this->commercialInvoice->build(),
            'commodities' => array_map(
                fn (CommodityPayload $commodity) => $commodity->build(),
                $this->commodities
            ),
        ];

        if ($this->dutiesPayment) {
            $payload['dutiesPayment'] = $this->dutiesPayment->build();
        }

        if ($this->isDocumentOnly) {
            $payload['isDocumentOnly'] = $this->isDocumentOnly;
        }

        if ($this->totalCustomsValue) {
            $payload['totalCustomsValue'] = $this->totalCustomsValue->build();
        }

        if ($this->exportDetail) {
            $payload['exportDetail'] = $this->exportDetail->build();
        }

        return $payload;
    }
}
