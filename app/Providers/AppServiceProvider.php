<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
    public function boot()
    { 

    }

    // practice on sharing data with views
   /* public function boot()
    { view()->share ("victor", "VICTOR IWUOHA");
        // later remove everything inbetween the brace brackets
    }*/
}
