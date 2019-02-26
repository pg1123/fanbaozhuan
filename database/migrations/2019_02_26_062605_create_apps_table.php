<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TABLE `apps` (
              `id` int(10) NOT NULL,
              `cat_id` int(10) NOT NULL,
              `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
              `abstract` text COLLATE utf8_unicode_ci,
              `imgs` text COLLATE utf8_unicode_ci,
              `is_publish` tinyint(1) NOT NULL DEFAULT "0",
              `is_recommend` tinyint(1) NOT NULL DEFAULT "0",
              `publish_date` datetime DEFAULT NULL,
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
        Schema::dropIfExists('apps');
    }
}
