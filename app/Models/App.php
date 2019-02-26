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
}


//php artisan migrate
//php artisan make:model App\\Models\\App
//php artisan admin:make AppController --model=App\\Models\\App