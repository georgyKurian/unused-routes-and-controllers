<?php

namespace GeorgyKurian\FindUnusedRoutesAndControllers;

use GeorgyKurian\FindUnusedRoutesAndControllers\Commands\FindUnusedRoutesAndControllersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FindUnusedRoutesAndControllersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('find-unused-routes-and-controllers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_find-unused-routes-and-controllers_table')
            ->hasCommand(FindUnusedRoutesAndControllersCommand::class);
    }
}
