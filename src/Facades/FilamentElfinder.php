<?php

namespace IchBin\FilamentElfinder\Facades;

use Illuminate\Support\Facades\Facade;

class FilamentElfinder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'filament-elfinder';
    }
}
