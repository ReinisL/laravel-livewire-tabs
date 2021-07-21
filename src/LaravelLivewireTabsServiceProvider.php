<?php

namespace Reinisl\LaravelLivewireTabs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Reinisl\LaravelLivewireTabs\Commands\LaravelLivewireTabsCommand;

class LaravelLivewireTabsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-livewire-tabs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-livewire-tabs_table')
            ->hasCommand(LaravelLivewireTabsCommand::class);
    }
}
