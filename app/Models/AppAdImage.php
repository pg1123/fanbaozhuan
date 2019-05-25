<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppAdImage extends Model
{
    protected $table = 'app_ad_images';

    public static function getAds()
    {
        return (new static())->where('is_publish', 1)->get();
    }
}
