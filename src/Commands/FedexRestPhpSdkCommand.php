<?php

namespace Nahapet93\FedexRestPhpSdk\Commands;

use Illuminate\Console\Command;

class FedexRestPhpSdkCommand extends Command
{
    public $signature = 'fedex-rest-php-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
