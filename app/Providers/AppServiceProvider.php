<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();

        View::share('categoriesShare', $categories);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
