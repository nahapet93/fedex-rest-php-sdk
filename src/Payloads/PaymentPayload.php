<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class PaymentPayload implements PayloadContract
{
    public function __construct(
        protected string $paymentType,
        protected PayorPayload $payor,
    ) {}

    public function build(): array
    {
        $payload = [
            'paymentType' => $this->paymentType,
        ];

        if (! empty($this->payor)) {
            $payload['payor'] = $this->payor->build();
        }

        return $payload;
    }
}
