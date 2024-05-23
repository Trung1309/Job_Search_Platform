<?php

namespace App\Providers;

use App\Models\District;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
        //
        View::composer('sidebar/sidebar_filter_company', function ($view) {
            $districts = District::all(); // Lấy tất cả các quận huyện
            $view->with('districts', $districts);
        });
    }
}
