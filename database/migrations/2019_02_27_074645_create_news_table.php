<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TABLE `news` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `cat_id` int(10) NOT NULL,
              `title` varchar(255) NOT NULL,
              `content` text,
              `picture` text,
              `views` int(10) NOT NULL,
              `is_hot` tinyint(1) DEFAULT NULL,
              `is_publish` tinyint(1) DEFAULT NULL,
              `published_date` date DEFAULT NULL,
              `created_at` timestamp NULL DEFAULT NULL,
              `updated_at` timestamp NULL DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
