<?php

namespace Sso;

use Illuminate\Support\ServiceProvider;

class SsoPackageProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__."/route.php");
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
