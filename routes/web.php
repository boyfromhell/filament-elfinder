<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('filament.domain'))
    ->middleware((config('filament.middleware.base')))
    ->group(function () {
        Route::get('/admin/elfinder/connector',[IchBin\FilamentElfinder\ElfinderController::class, 'showConnector'])->name('elfinder.connector');
    });
