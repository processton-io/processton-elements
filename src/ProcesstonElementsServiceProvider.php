<?php

namespace Processton\ProcesstonElements;

use Illuminate\Support\ServiceProvider;

class ProcesstonElementsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('processton-elements', function () {
            return new ProcesstonElements;
        });
    }
}
