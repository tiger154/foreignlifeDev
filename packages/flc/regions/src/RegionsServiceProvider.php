<?php

namespace Flc\Regions;

use Illuminate\Support\ServiceProvider;

class RegionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/region.php' => config_path('region.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $packageConfigFile = __DIR__.'/config/region.php';

        $this->mergeConfigFrom(
            $packageConfigFile, 'laravelregions'
        );

        $this->app->singleton(Regions::class, function () {
            return new Regions();
        });

        $this->app->alias(Regions::class, 'laravelregions');
    }
}
