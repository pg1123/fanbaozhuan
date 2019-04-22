<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppAdImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TABLE `app_ad_images` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `picture` text COLLATE utf8_unicode_ci　NOT NULL,
              `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `is_publish` tinyint(1) NOT NULL DEFAULT "0",
              `created_at` datetime DEFAULT NULL,
              `updated_at` datetime DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=3380 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_ad_images');
    }
}
