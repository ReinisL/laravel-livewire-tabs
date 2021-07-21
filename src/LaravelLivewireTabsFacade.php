<?php

namespace Reinisl\LaravelLivewireTabs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Reinisl\LaravelLivewireTabs\LaravelLivewireTabs
 */
class LaravelLivewireTabsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-livewire-tabs';
    }
}
