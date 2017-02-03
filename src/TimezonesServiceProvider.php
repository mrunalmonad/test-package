<?php

namespace Mrunal\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Adding routes to register
        include __DIR__.'/routes.php';
        $this->app->make('Mrunal\Timezones\TimezonesController');
    }
}
