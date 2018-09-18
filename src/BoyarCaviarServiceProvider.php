<?php

namespace Kwidoo\BoyarCaviar;

use Illuminate\Support\ServiceProvider;

class BoyarCaviarServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'boyarcaviar');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'boyarcaviar');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/boyarcaviar.php' => config_path('boyarcaviar.php'),
            ], 'boyarcaviar.config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/resources/views' => base_path('resources/views/vendor/kwidoo'),
            ], 'boyarcaviar.views');

            // Publishing assets: js, css, images and fonts
            $this->publishes([
                __DIR__.'/../publishable/assets' => public_path('/'),
            ], 'boyarcaviar.assets');
            
            $this->publishes([
                __DIR__.'/../publishable/fonts' => public_path('/'),
            ], 'boyarcaviar.assets');
            $this->publishes([
                __DIR__.'/../publishable/img' => public_path('/'),
            ], 'boyarcaviar.assets');
            $this->publishes([
                __DIR__.'/../publishable/svg' => public_path('/'),
            ], 'boyarcaviar.assets');
            // Publishing auth.
            $this->publishes([
                __DIR__.'/../publishable/auth' => base_path('resources/views/auth'),
            ], 'boyarcaviar.auth');
            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/resources/lang' => resource_path('lang/vendor/kwidoo'),
            ], 'boyarcaviar.views');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/boyarcaviar.php', 'boyarcaviar');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'boyarcaviar');

        $this->app->make('Kwidoo\BoyarCaviar\Controllers\FrontendController');

        // Register the service the package provides.
        $this->app->singleton('boyarcaviar', function ($app) {
            return new BoyarCaviar;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['boyarcaviar'];
    }
}