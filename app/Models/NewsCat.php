<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCat extends Model
{
    protected $table = 'news_category';

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
