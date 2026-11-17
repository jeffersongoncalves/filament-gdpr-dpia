<?php

namespace JeffersonGoncalves\Filament\GdprDpia;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GdprDpiaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-gdpr-dpia')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
