<?php

namespace Honchos\Ratelimiter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Honchos\Ratelimiter\Http\Middleware\ThrottleRequest;

class RateLimiterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(Router $router)
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('throttle', ThrottleRequest::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // $this->app->singleton(Connection::class, function ($app) {
        //     $app->register(Honchos\Ratelimiter\RateLimiterServiceProvider::class);
        // });

        // $app->register(Honchos\Ratelimiter\RateLimiterServiceProvider::class);

        // $app->routeMiddleware([
        //     'throttle' => ThrottleRequest::class
        // ]);
    }
}
