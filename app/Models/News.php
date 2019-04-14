<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function newscat()
    {
        return $this->belongsTo(NewsCat::class, 'cat_id', 'id');
    }

    public static function getNews($count=99999) {
        $news = News::where('is_publish', 1)
                ->orderBy('created_at', 'desc')
                ->take($count)
                ->get();
        return $news;
    }

}
