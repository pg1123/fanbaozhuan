<?php

use Illuminate\Database\Seeder;

class admin_menuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            INSERT INTO `admin_menu` VALUES (1,0,1,'Index','fa-bar-chart','/',NULL,NULL,NULL),(2,0,2,'Admin','fa-tasks','',NULL,NULL,NULL),(3,2,3,'Users','fa-users','auth/users',NULL,NULL,NULL),(4,2,4,'Roles','fa-user','auth/roles',NULL,NULL,NULL),(5,2,5,'Permission','fa-ban','auth/permissions',NULL,NULL,NULL),(6,2,6,'Menu','fa-bars','auth/menu',NULL,NULL,NULL),(7,2,7,'Operation log','fa-history','auth/logs',NULL,NULL,NULL),(8,0,0,'网站平台管理','fa-clone',NULL,NULL,'2019-03-08 23:23:40','2019-03-08 23:25:45'),(9,8,0,'平台列表','fa-align-justify','apps',NULL,'2019-03-08 23:27:58','2019-03-08 23:32:40'),(10,8,0,'栏目管理','fa-columns','appcat',NULL,'2019-03-08 23:41:57','2019-03-08 23:41:57'),(11,0,0,'网站新闻管理','fa-th-list',NULL,'*','2019-04-13 22:56:17','2019-04-13 22:58:32'),(12,11,0,'文章列表','fa-file-o','news',NULL,'2019-04-13 22:57:38','2019-04-13 22:57:45'),(13,11,0,'栏目管理','fa-bars','newscat',NULL,'2019-04-13 23:04:05','2019-04-13 23:04:05')
        ");
    }
}
