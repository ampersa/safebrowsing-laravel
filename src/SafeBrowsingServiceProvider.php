<?php

namespace Ampersa\SafeBrowsing\Laravel;

use Ampersa\SafeBrowsing\SafeBrowsing;
use Illuminate\Support\ServiceProvider;

class SafeBrowsingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            realpath(__DIR__.'/../config/safebrowsing.php') => config_path('safebrowsing.php'),
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $config = config('safebrowsing');
        $this->app->singleton('safebrowsing', function () use ($config) {
            return new SafeBrowsing($config['api_key'], $config['options']);
        });
    }
}
