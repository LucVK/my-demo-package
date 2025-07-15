<?php

namespace Lucvk\MyDemoPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lucvk\MyDemoPackage\Commands\MyDemoPackageCommand;

class MyDemoPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('my-demo-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_demo_package_table')
            ->hasCommand(MyDemoPackageCommand::class);
    }
}
