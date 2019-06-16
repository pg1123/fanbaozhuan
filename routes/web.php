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


$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$is_iphone = (strpos($agent, 'iphone')) ? true : false;
$is_ipad = (strpos($agent, 'ipad')) ? true : false;
$is_android = (strpos($agent, 'android')) ? true : false;
$isMobile = ($is_iphone or $is_ipad or $is_android) ? true : false;

/*Route::get('/bibei', 'IndexController@bibei')->name('index.bibei');
Route::get('/new', 'IndexController@new')->name('index.new');
Route::get('/order', 'IndexController@order')->name('index.order');*/

/*Route::get('/', function () {
    return view('index');
});*/


//old pc
/*Route::get('/', 'IndexController@index')->name('index.index');

Route::get('/{cat}', 'IndexController@catApps')
->where([
    'cat' => '^(apple||android|yuedu|zh)$'
])
->name('index.catApps');

Route::get('/show/{type}', 'IndexController@showApps')
->where([
            'type' => '^(bibei|new|order)$'
        ])
->name('index.show');

Route::get('/app/{cat_id}/{id}', 'IndexController@appInfo')->name('index.appInfo');

Route::get('/news/list', 'NewsController@newsList')->name('news.list');
Route::get('/news/{id}', 'NewsController@newsInfo')->name('news.info');

Route::get('/gonglue', 'NewsController@gonglue')->name('news.gonglue');
Route::get('/hongbao', 'NewsController@zfb')->name('news.zfb');*/




// Route::group(['prefix' => 'line'], function () {
//     Route::get('/', 'Line\IndexController@index')->name('line.index');
// });

Route::get('/', 'Line\IndexController@index')->name('line.index');

if ($isMobile) {
    Route::get('/line/{cat_id}/{id}', 'Line\IndexController@appInfo')->name('line.appInfo');
    Route::get('/line/hongbao', 'Line\NewsController@zfb')->name('line.zfb');
    Route::get('/line/gonglue', 'Line\NewsController@gonglue')->name('line.gonglue');
    Route::get('/line/recommend', 'Line\IndexController@recommend')->name('line.recommend');
    Route::get('/line/reader', 'Line\IndexController@reader')->name('line.reader');
    Route::get('/android', 'Line\IndexController@android')->name('line.android');
    Route::get('/wuhen.html', 'Line\IndexController@wuhen')->name('line.wuhen');
}
    Route::get('/wuhen.html', 'Line\IndexController@wuhen')->name('line.wuhen');


