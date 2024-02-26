<?php

namespace Simon Barrett\LaravelEnvExample;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Simon Barrett\LaravelEnvExample\Commands\LaravelEnvExampleCommand;

class LaravelEnvExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-env-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-env-example_table')
            ->hasCommand(LaravelEnvExampleCommand::class);
    }
}
