<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = 'apps';

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
}

//php artisan make:migration create_users_table
//php artisan migrate
//php artisan make:model App\\Models\\App
//php artisan admin:make AppController --model=App\\Models\\App
