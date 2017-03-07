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
       parent::register();

    }
} 