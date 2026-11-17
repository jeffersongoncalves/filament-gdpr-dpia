<?php

namespace JeffersonGoncalves\Filament\GdprDpia;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class GdprDpiaServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-gdpr-dpia';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
