<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\App;
use Illuminate\Support\Facades\Schema; //NEW: Import Schema


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
        Schema::defaultStringLength(191); //NEW: Increase StringLength

        App::deleting(function ($model) {
            $model->next()->decrement('position');
        });
    }
}
