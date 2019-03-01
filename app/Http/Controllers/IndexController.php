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

    public function index() {
        $apps = App::where('is_publish', 1)->get();
        return view('index', [
            'apps' => $apps,
        ]);
    }

    public function getNews() {
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
    }
}