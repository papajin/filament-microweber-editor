<?php

namespace Papajin\FilamentMicroweberEditor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Papajin\FilamentMicroweberEditor\Commands\FilamentMicroweberEditorCommand;

class FilamentMicroweberEditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-microweber-editor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-microweber-editor_table')
            ->hasCommand(FilamentMicroweberEditorCommand::class);
    }
}
