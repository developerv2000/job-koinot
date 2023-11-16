<?php

namespace App\Providers;

use App\Support\Helper;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('dashboard.*', function ($view) {
            $view->with('routeName', Route::currentRouteName())
                ->with('modelPrefixName', Helper::getModelPrefixName());;
        });
    }
}
