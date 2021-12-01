<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PhotoHandleService;


class PhotoHandleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PhotoHandleService::class, function ($app) {
            return new PhotoHandleService;
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
