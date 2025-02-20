<?php

namespace Nahapet93\FedexRestPhpSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nahapet93\FedexRestPhpSdk\FedexRestPhpSdk
 */
class FedexRestPhpSdk extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Nahapet93\FedexRestPhpSdk\FedexRestPhpSdk::class;
    }
}
