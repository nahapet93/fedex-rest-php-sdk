<?php

namespace SmartDato\FedexRestPhpSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmartDato\FedexRestPhpSdk\FedexRestPhpSdk
 */
class FedexRestPhpSdk extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SmartDato\FedexRestPhpSdk\FedexRestPhpSdk::class;
    }
}
