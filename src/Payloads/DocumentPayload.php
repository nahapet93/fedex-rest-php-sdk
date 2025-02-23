<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;
use SmartDato\FedexRestPhpSdk\Enums\DocumentTypeEnum;

class DocumentPayload implements PayloadContract
{
    public function __construct(
        protected DocumentTypeEnum $documentType,
        protected string $documentReference,
        protected string $description,
        protected string $documentId,
    ) {}

    public function build(): array
    {
        return [
            'documentType' => $this->documentType->value,
            'documentReference' => $this->documentReference,
            'description' => $this->description,
            'documentId' => $this->documentId,
        ];
    }
}
