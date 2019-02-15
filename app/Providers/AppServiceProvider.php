<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        require app_path('Helpers/Functions.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $value = [
          'container' => 'Binding Basics',
        ];
        $this->app->when('App\Http\Controllers\HomeController')
          ->needs('$variableName')
          ->give($value);
    }
}
