<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', 'IndexController@index')->name('index.index');

Route::get('/{cat}', 'IndexController@catApps')->name('index.catApps');

Route::get('/{type}', 'IndexController@showApps')->name('index.show');
/*Route::get('/bibei', 'IndexController@bibei')->name('index.bibei');
Route::get('/new', 'IndexController@new')->name('index.new');
Route::get('/order', 'IndexController@order')->name('index.order');*/

Route::get('/app/{cat_id}/{id}', 'IndexController@appInfo')->name('index.app');