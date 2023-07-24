<?php

namespace IchBin\FilamentElfinder;

use Filament\PluginServiceProvider;
use GameQ\Result;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;

class FilamentElfinderServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-elfinder';

    protected array $pages = [
        Pages\ElfinderPage::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasRoute('web')
            ->hasViews(static::$name)
            ->hasAssets()
            ->hasConfigFile()
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishAssets()
                    ->askToStarRepoOnGitHub('boyfromhell/filament-elfinder');
            });
    }
}
