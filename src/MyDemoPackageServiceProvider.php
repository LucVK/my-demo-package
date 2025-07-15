<?php

namespace Lucvk\MyDemoPackage;

use Lucvk\MyDemoPackage\Commands\MyDemoPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
