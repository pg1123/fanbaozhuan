<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppCat extends Model
{
    protected $table = 'app_category';

    public function apps()
    {
        return $this->hasMany(App::class);
    }

}
