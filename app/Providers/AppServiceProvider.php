<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Jackiedo\Cart\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $shoppingCart = new Cart();
        $cart = $shoppingCart->name('basket');

        View::composer('*', function ($view) use($cart) {
            $view->with('cartItems', $cart->getDetails()->get('items'));
        });

        if(App::environment() == "live")
        {
            $url = \Request::url();
            $check = strstr($url,"http://");
            if($check)
            {
                $newUrl = str_replace("http","https",$url);
                header("Location:".$newUrl);

            }
        }
    }
}
