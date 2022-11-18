<?php

namespace GeorgyKurian\FindUnusedRoutesAndControllers\Commands;

use Illuminate\Console\Command;

class FindUnusedRoutesAndControllersCommand extends Command
{
    public $signature = 'find-unused-routes-and-controllers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
