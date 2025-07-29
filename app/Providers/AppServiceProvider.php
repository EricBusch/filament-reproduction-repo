<?php

namespace App\Providers;

use App\Models\Website;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        Route::bind('websites', function (string $value) {
            dump($value);
            return Website::where('id', $value)->firstOrFail();
        });
    }
}
