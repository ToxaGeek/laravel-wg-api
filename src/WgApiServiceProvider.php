<?php

namespace ToxaGeek\LaravelWgApi;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class WgApiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/wg_api.php' => config_path('wg_api.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/wg_api.php', 'wg_api');
        App::bind('wgApi', function () {
            return new \ToxaGeek\LaravelWgApi\WgApi;
        });
    }
}
