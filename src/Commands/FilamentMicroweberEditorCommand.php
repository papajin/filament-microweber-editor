<?php

namespace Papajin\FilamentMicroweberEditor\Commands;

use Illuminate\Console\Command;

class FilamentMicroweberEditorCommand extends Command
{
    public $signature = 'filament-microweber-editor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
