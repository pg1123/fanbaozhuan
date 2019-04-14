<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use App\Models\App;
use App\Models\AppCat;

/**
 *
 */
class IndexController extends Controller
{
    const APPLE = 1;
    const ANDROID = 2;
    const YUEDU = 3;
    const ZONGHE = 4;

    public function index() {
        $jpApps = App::getJpApps(4);
        $hotApps = App::getHotApps(self::APPLE);
        //tabs
        $appleNewsTab = App::getNewApps(self::APPLE, 4);
        $appleHotsTab = App::getHotApps(self::APPLE, 4);
        $androidTab = App::getApps(self::ANDROID, 8);
        $yueduTab = App::getApps(self::YUEDU, 8);
        $zhTab = App::getApps(self::ZONGHE, 8);
        return view('index', [
            'jpApps' => $jpApps,
            'hotApps' => $hotApps,
            'appleNewsTab' => $appleNewsTab,
            'appleHotsTab' => $appleHotsTab,
            'androidTab' => $androidTab,
            'zhTab' => $zhTab,
        ]);
    }

    public function catApps($cat)
    {
        switch ($cat) {
            case 'apple':
                $newApps = App::getNewApps(self::APPLE);
                $hotApps = App::getHotApps(self::APPLE);
                break;
            case 'android':
                $newApps = App::getNewApps(self::ANDROID);
                $hotApps = App::getHotApps(self::ANDROID);
                break;
            case 'yuedu':
                $newApps = App::getNewApps(self::YUEDU);
                $hotApps = App::getHotApps(self::YUEDU);
                break;
            case 'zh':
                $newApps = App::getNewApps(self::ZONGHE);
                $hotApps = App::getHotApps(self::ZONGHE);
                break;
            default:
                # code...
                break;
        }
        return view('apple', [
            'newApps' => $newApps,
            'hotApps' => $hotApps,
            'cat' => $cat
        ]);
    }

    public function showApps($type)
    {
        switch ($type) {
            case 'bibei':
                $title ='精品必备';
                $apps = App::getBibeiApps(self::APPLE, 5);
                break;
            case 'new':
                $title = '最新';
                $apps = App::where('is_publish', 1)
                    ->where('cat_id', self::APPLE)
                    ->where('is_new', 1)
                    ->orderBy('position', 'asc')
                    ->get();
            case 'order':
                $title = '排行';
                $apps = App::where('is_publish', 1)
                    ->where('cat_id', self::APPLE)
                    ->orderBy('position', 'asc')
                    ->get();
            default:
                break;
        }

        return view('show_apps', [
            'title' => $title,
            'apps' => $apps
        ]);
    }

    /*public function bibei() {
        $bibeiApps = App::where('is_publish', 1)
            ->where('cat_id', self::APPLE)
            ->where('is_bibei', 1)
            ->orderBy('position', 'asc')
            ->get();
        return view('bibei', [
            'bibeiApps' => $bibeiApps
        ]);
    }

    public function new() {
        $newApps = App::where('is_publish', 1)
            ->where('cat_id', self::APPLE)
            ->where('is_new', 1)
            ->orderBy('position', 'asc')
            ->get();
        return view('new', [
            'newApps' => $newApps
        ]);
    }

    public function order() {
        $orderApps = App::where('is_publish', 1)
            ->where('cat_id', self::APPLE)
            ->orderBy('position', 'asc')
            ->get();
        return view('order', [
            'orderApps' => $newApps
        ]);
    }*/

    public function appInfo($catId, $id) {
        $cat = AppCat::find($catId);
        $app = App::find($id);
        $jpApps = App::where('is_publish', 1)
                    ->orderBy('position', 'asc')
                    ->limit(4)
                    ->get();
        return view('appInfo', [
            'app' => $app,
            'jpApps' => $jpApps,
            'cat' => $cat
        ]);
    }



    /*public function getNews() {
        $cats = Category::where('name', '=', 'News')->get(['id']);
        foreach ($cats as $key => $value) {
            $catId = $value['id'];
        }
        $news = Post::where('cate_id', $catId)
                ->orderBy('created_at', 'asc')
                ->limit(5)
                ->get();
        return $news;
    }

    public function getFeatured() {
        return Article::where('is_featured', '1')
            ->orderBy('created_at', 'desc')
            ->first();
    }*/
}