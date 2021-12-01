<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ShowCartService;

class ShowCartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ShowCartService ::class, function ($app) {
            return new ShowCartService ;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
