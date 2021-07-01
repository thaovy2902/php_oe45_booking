<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;
>>>>>>> first commit
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
=======
        Paginator::useBootstrap();
>>>>>>> first commit
    }
}
