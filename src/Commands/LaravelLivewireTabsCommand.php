<?php

namespace Reinisl\LaravelLivewireTabs\Commands;

use Illuminate\Console\Command;

class LaravelLivewireTabsCommand extends Command
{
    public $signature = 'laravel-livewire-tabs';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
