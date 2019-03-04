<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

Route::get('sort', 'AppController@sort')->name('apps.sort');

    $router->get('/', 'HomeController@index');
    $router->resource('apps', AppController::class);
    $router->resource('appcat', AppCatController::class);
    $router->resource('news', NewsController::class);
    $router->resource('newscat', NewsCatController::class);



});
