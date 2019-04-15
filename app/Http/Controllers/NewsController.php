<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use App\Models\News;

/**
 *
 */
class NewsController extends Controller
{
    public function newsList() {
        //news
        $news = News::getNews();

        return view('news.list', [
            'newsList' => $news
        ]);
    }

    public function newsInfo($id) {
        //news
        $new = News::find($id);

        return view('news.info', [
            'new' => $new
        ]);
    }

    public function gonglue() {
        return view('news.gonglue');
    }

    public function zfb() {
        return view('news.zfb');
    }


}