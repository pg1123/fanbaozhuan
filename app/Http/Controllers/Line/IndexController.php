<?php
namespace App\Http\Controllers\Line;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\App;
use App\Models\AppCat;
use App\Models\News;
use App\Models\AppAdImage;

/**
 *
 */
class IndexController extends Controller
{
    const APPLE = 1;
    const ANDROID = 2;
    const YUEDU = 3;
    const ZONGHE = 4;
    private $type;

    public function __construct()
    {
        // $this->is_android = false;
        // $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        // $is_android = (strpos($agent, 'android')) ? true : false;
        // $this->type = !$is_android ? self::APPLE : self::ANDROID;


    }

    public function index() {
        $appleApps = App::getApps(self::APPLE);
        //$ads = AppAdImage::getAds();
        return view('line.index', [
            'appleApps' => $appleApps,
            //'ads' => $ads,
            'people' => rand(15984, 16020),
            'type' => '苹果'
        ]);
    }


    public function anzhuo() {
        $appleApps = App::getApps(self::ANDROID);
        //$ads = AppAdImage::getAds();
        return view('line.index', [
            'appleApps' => $appleApps,
            //'ads' => $ads,
            'people' => rand(15984, 16020),
            'type' => '安卓'
        ]);
    }

    public function recommend() {
        $recommendApps = App::getHotApps($this->type);
        return view('line.recommend', [
            'recommendApps' => $recommendApps,
        ]);
    }

    public function reader() {
        $readerApps = App::getApps(self::YUEDU);
        return view('line.reader', [
            'readerApps' => $readerApps,
        ]);
    }

    public function appInfo($catId, $id) {
        $app = App::find($id);
        $jpApps = App::getJpApps(3);

        return view('line.appInfo', [
            'app' => $app,
            'jpApps' => $jpApps
        ]);
    }

    public function wuhen() {
        return view('line.wuhen');
    }
}