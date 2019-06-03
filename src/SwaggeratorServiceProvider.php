<?php

namespace Peterzaccha\Swaggerator;

use Illuminate\Support\ServiceProvider;

class SwaggeratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
               Generate::class
            ]);
        }
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}