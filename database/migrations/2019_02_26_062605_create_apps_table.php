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
      //ALTER TABLE `apps` ADD `url_2` varchar(255) DEFAULT NULL AFTER `url`
      //ALTER TABLE `apps` ADD `reward` varchar(255) DEFAULT 1 AFTER `name`
        DB::unprepared('
            CREATE TABLE `apps` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `position` int(10) NOT NULL,
              `cat_id` int(10) NOT NULL,
              `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `reward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `logo` text COLLATE utf8_unicode_ci,
              `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `url_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
              `keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
              `abstract` text COLLATE utf8_unicode_ci,
              `picture` text COLLATE utf8_unicode_ci,
              `is_publish` tinyint(1) NOT NULL DEFAULT "0",
              `is_recommend` tinyint(1) NOT NULL DEFAULT "0",
              `is_bibei` tinyint(1) NOT NULL DEFAULT "0",
              `is_new` tinyint(1) NOT NULL DEFAULT "0",
              `is_jp` tinyint(1) NOT NULL DEFAULT "0",
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



