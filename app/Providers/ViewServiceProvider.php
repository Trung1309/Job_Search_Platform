<?php

namespace App\Providers;

use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Models\District;
use App\Models\Experience;
use App\Models\Level;
use App\Models\Position;
use App\Models\Province;
use App\Models\Skill;
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
            $provinces = Province::all(); // Lấy tất cả các quận huyện
            $view->with('provinces', $provinces);
        });

        View::composer('sidebar.sidebar_filter_job' , function ($view) {
            $categories = Category::all();
            $view->with('categories',$categories);
            $provinces = Province::all(); // Lấy tất cả các quận huyện
            $view->with('provinces', $provinces);
            $positions = Position::all();
            $view->with('positions',$positions);
            $levels = Level::all();
            $view->with('levels',$levels);
            $experiences = Experience::all();
            $view->with('experiences',$experiences);
            $skills = Skill::all();
            $view->with('skills',$skills);

        });

        View::composer('job-filter',function($view){
            $categories = Category::all();
            $view->with('categories',$categories);
            $provinces = Province::all(); // Lấy tất cả các quận huyện
            $view->with('provinces', $provinces);
            $positions = Position::all();
            $view->with('positions',$positions);
            $levels = Level::all();
            $view->with('levels',$levels);
            $experiences = Experience::all();
            $view->with('experiences',$experiences);

        });
    }
}
