<?php

namespace Runtimeinteractive\PackageTest\Commands;

use Illuminate\Console\Command;

class PackageTestCommand extends Command
{
    public $signature = 'package-test';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
