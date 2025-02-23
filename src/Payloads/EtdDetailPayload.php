<?php

namespace SmartDato\FedexRestPhpSdk\Payloads;

use SmartDato\FedexRestPhpSdk\Contracts\PayloadContract;

class EtdDetailPayload implements PayloadContract
{
    public function __construct(
        protected ?array $attachedDocuments, /** @var DocumentPayload[] $attachedDocuments */
    ) {}

    public function build(): array
    {
        return [
            'attachedDocuments' => array_map(
                fn (DocumentPayload $attachedDocument) => $attachedDocument->build(),
                $this->attachedDocuments
            ),
        ];
    }
}
