<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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


            // $settings=DB::table('cart')->where('user_id', '=',Auth::user()->id)->sum('price');
            // View::share('settings',$settings);

            Paginator::useBootstrap();
            define('PaginationCount',9);

    }
}
