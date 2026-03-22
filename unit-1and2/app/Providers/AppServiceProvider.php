<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\view;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //static data
        // view::share('name',"Hi i am Teacher");
        // view::share('header',"This is header");
        // view::share('footer',"This is footer");

        //dinamic data
        view::composer('*',function($view){
        $time=date('H:i:s');
        $view->with('time',$time);
        });
    }
}
