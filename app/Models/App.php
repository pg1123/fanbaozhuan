<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = 'apps';
}


//php artisan migrate
//php artisan make:model App\\Models\\App
//php artisan admin:make AppController --model=App\\Models\\App