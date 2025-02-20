<?php

namespace Nahapet93\FedexRestPhpSdk;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nahapet93\FedexRestPhpSdk\Commands\FedexRestPhpSdkCommand;

class FedexRestPhpSdkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fedex-rest-php-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fedex_rest_php_sdk_table')
            ->hasCommand(FedexRestPhpSdkCommand::class);
    }
}
