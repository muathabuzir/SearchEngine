<?php

namespace Mawdoo3\SearchResults;

use Illuminate\Support\ServiceProvider;
use Mawdoo3\SearchResults\Services\Google;

class sp_mawdoo3_laravel extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton(Google::class, function () {
            return new Google(config('sp_mawdoo3_laravel'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'sp_mawdoo3_laravel');
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/Config/Google.php', 'sp_mawdoo3_laravel');

        $this->publishes([
            __DIR__ . '/Config/Google.php' => config_path('Google.php'),
        ]);
    }

}
