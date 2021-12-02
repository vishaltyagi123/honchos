<?php

namespace Honchos\Ratelimiter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Honchos\Ratelimiter\Http\Middleware\ThrottleRequest;
use Riak\Connection;

class RateLimiterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $router = $this->app->make(Router::class);
        $router->pushMiddlewareToGroup('web', ThrottleRequest::class);
        //for tresting purpose 
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
