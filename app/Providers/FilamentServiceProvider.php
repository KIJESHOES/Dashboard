<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            // Sidebar collapse default
            Filament::layout('app')->sidebar()->collapsed(true);

            // Mobile responsive: sidebar overlay
            Filament::layout('app')->sidebar()->mobileOverlay(true);
        });
    }
}