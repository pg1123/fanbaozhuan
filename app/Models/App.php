<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use \Rutorika\Sortable\SortableTrait;
    protected $table = 'apps';
    protected static $sortableField = 'position';

    public function setPictureAttribute($picture)
    {
        if (is_array($picture)) {
            $this->attributes['picture'] = json_encode($picture);
        }
    }

    public function getPictureAttribute($picture)
    {
        return json_decode($picture, true);
    }

    public function getFirstPicture()
    {
        if (count($this->picture) > 0) {
            return self::UPLOAD_DIR . '/' . $this->picture[0];
        }
        return null;
    }

    public function appcat()
    {
        return $this->belongsTo(AppCat::class, 'cat_id', 'id');
    }

    public static function getJpApps($count=4)
    {
        return (new static())->where('is_jp', 1)->orderBy('position', 'asc')->take($count)->get();
    }

    public static function getHotApps($catId)
    {
        return (new static())->where('cat_id', $catId)->where('is_recommend', 1)->orderBy('position', 'asc')->get();
    }

    public static function getNewApps($catId)
    {
        return (new static())->where('cat_id', $catId)->where('is_new', 1)->orderBy('position', 'asc')->get();
    }

}

//php artisan make:migration create_users_table
//php artisan migrate
//php artisan make:model App\\Models\\App
//php artisan admin:make AppController --model=App\\Models\\App
