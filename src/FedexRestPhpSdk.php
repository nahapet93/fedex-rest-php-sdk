<?php

namespace SmartDato\FedexRestPhpSdk;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use SmartDato\FedexRestPhpSdk\Enums\LabelResponseOptionEnum;
use SmartDato\FedexRestPhpSdk\Payloads\ShipmentPayload;

class FedexRestPhpSdk
{
    public function __construct(
        protected string $baseUrl,
        protected string $authorization,
        protected LabelResponseOptionEnum $labelResponseOptions,
        protected string $accountNumber,
        protected string $contentType = 'application/json',
    ) {}

    /**
     * @throws ConnectionException
     */
    public function createShipment(ShipmentPayload $payload): JsonResponse
    {
        $response = Http::baseUrl($this->baseUrl)
            ->withHeaders([
                'content-type' => $this->contentType,
                'authorization' => $this->authorization,
            ])
            ->withBody(json_encode($this->buildPayload($payload)))
            ->post('/ship/v1/shipments');

        return $response->json();
    }

    private function buildPayload(ShipmentPayload $payload): array
    {
        return [
            'requestedShipment' => $payload->build(),
            'labelResponseOptions' => $this->labelResponseOptions->value,
            'accountNumber' => [
                'value' => $this->accountNumber,
            ]
        ];
    }
}
