<?php

namespace Ycs77\LaravelFormBuilderBs4;

use Illuminate\Support\ServiceProvider;

class FormBuilderBs4ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-form-builder.php' => config_path('laravel-form-builder.php'),
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-form-builder'),
        ], 'laravel-form-builder-bs4');

        $this->publishes([
            __DIR__ . '/../config/laravel-form-builder-horizontal.php' => config_path('laravel-form-builder.php'),
            __DIR__ . '/../resources/views-horizontal' => resource_path('views/vendor/laravel-form-builder'),
        ], 'laravel-form-builder-bs4-horizontal');
    }
}
