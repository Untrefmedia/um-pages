<?php

namespace Untrefmedia\UMPages;

use Illuminate\Support\ServiceProvider;

class UMPagesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/um-pages.php' => config_path('um-pages.php'),

        ], 'config');

    }

    /**
     * Register the application services.
     */
    public function register()
    {

        require __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Resources/views', 'umpages');



    }
}