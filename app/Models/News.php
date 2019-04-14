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

}
