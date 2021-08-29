<?php

namespace Ajoy39\ArtisansDomain;

use Ajoy39\ArtisansDomain\Commands\ArtisansDomainCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ArtisansDomainServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('artisans-domain')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_artisans-domain_table')
            ->hasCommand(ArtisansDomainCommand::class);
    }
}
