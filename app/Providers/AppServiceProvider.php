<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\App;

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
        App::deleting(function ($model) {
            $model->next()->decrement('position');
        });
    }
}
