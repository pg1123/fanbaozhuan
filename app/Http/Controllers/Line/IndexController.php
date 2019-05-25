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

    public function index() {
        $appleApps = App::getApps(self::APPLE);
        $ads = AppAdImage::getAds();
        return view('line.index', [
            'appleApps' => $appleApps,
            'ads' => $ads
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

}