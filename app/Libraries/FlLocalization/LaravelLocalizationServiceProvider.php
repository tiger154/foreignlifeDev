<?php
namespace foreignlifeDev\app\Libraries\FlLocalization;

use \Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider as BaseLaravelLocalizationServiceProvider;

class LaravelLocalizationServiceProvider extends  BaseLaravelLocalizationServiceProvider {
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */

    public function register()
    {

        $path = base_path('vendor/mcamara/laravel-localization/src/config');
        $packageConfigFile = $path.'/config.php';

        $this->mergeConfigFrom(
            $packageConfigFile, 'laravellocalization'
        );

        $this->app->singleton(LaravelLocalization::class, function () {
            return new LaravelLocalization();
        });

        $this->app->alias(LaravelLocalization::class, 'laravellocalization');

    }
} 