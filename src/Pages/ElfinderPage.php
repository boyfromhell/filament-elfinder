<?php

namespace IchBin\FilamentElfinder\Pages;

use Filament\Pages\Page;

class ElfinderPage extends Page
{

    protected static function getNavigationIcon(): string
    {
        return config('filament-elfinder.icon');
    }
    public function getTitle(): string
    {
        return config('filament-elfinder.title');
    }

    protected static string $view = 'filament-elfinder::pages.elfinder-page';

    protected static ?string $slug = 'elfinder';
    protected static function getNavigationGroup(): ?string
    {
        return config('filament-elfinder.group');
    }
    protected static function getNavigationLabel(): string
    {
        return config('filament-elfinder.label');
    }

    protected static function shouldRegisterNavigation(): bool
    {
        if (auth()->user() && !method_exists(auth()->user(), 'canManageFiles')) {
            return true;
        }
        return false;
    }
}
