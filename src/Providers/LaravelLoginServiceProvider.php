<?php

namespace w337886915\app\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelLoginServiceProvider extends ServiceProvider
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
        //
        $this->loadRoutesFrom(dirname(dirname(__DIR__)).'routes/web.php');
    }
}
