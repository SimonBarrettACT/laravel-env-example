<?php

namespace Simon Barrett\LaravelEnvExample\Commands;

use Illuminate\Console\Command;

class LaravelEnvExampleCommand extends Command
{
    public $signature = 'laravel-env-example';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
