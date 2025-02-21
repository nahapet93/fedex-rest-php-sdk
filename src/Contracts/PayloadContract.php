<?php

namespace SmartDato\FedexRestPhpSdk\Contracts;

interface PayloadContract
{
    public function build(): array;
}
