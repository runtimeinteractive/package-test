<?php

namespace Runtimeinteractive\PackageTest;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Runtimeinteractive\PackageTest\Commands\PackageTestCommand;

class PackageTestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('package-test')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_package-test_table')
            ->hasCommand(PackageTestCommand::class);
    }
}
