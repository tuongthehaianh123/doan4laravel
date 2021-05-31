<?php

namespace App\Providers;
use App\ProductType;
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
        view()->composer('site',function($view){
         $sanpham = ProductType::all();
         $view->with('sanpham',$sanpham);
        });
        
       Paginator::useBootstrap();
    }
    
}
