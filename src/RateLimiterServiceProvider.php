<?php

namespace Honchos\Ratelimiter;

use Illuminate\Support\ServiceProvider;

class RateLimiterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // if ($this->app->runningInConsole()) {
        //     $this->publishes([
        //         __DIR__.'/../config/config.php' => config_path('ratelimiter.php'),
        //     ], 'config');
        // }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        // $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ratelimiter');

        // Register the main class to use with the facade
        $this->app->singleton('RateLimiterRequest', function () {
            return new RateLimiterRequest;
        });
    }
}
