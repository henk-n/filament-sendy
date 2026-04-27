<?php

namespace Henkn\FilamentSendy\Commands;

use Illuminate\Console\Command;

class FilamentSendyCommand extends Command
{
    public $signature = 'filament-sendy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
