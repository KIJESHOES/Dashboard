<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema; // tambahkan ini
use App\Models\Visitor;

class VisitorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\Visitors::class);

        // Cek dulu apakah tabel visitors sudah ada
        if (Schema::hasTable('visitors')) {
            View::share('visitorCount', Visitor::count());
        } else {
            View::share('visitorCount', 0);
        }
    }

    public function register(): void
    {
        //
    }
}
