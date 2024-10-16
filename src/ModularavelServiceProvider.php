<?php

namespace Modularavel\Modularavel;

use Modularavel\Modularavel\Commands\ModularavelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ModularavelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('modularavel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_modularavel_table')
            ->hasCommand(ModularavelCommand::class);
    }
}
