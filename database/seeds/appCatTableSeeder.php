<?php

use Illuminate\Database\Seeder;

class appCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            INSERT INTO `app_category` VALUES (1,'苹果赚钱','2019-03-08 23:44:52','2019-03-08 23:44:52'),(2,'安卓赚钱','2019-03-08 23:45:11','2019-03-08 23:45:11'),(3,'阅读赚钱','2019-03-08 23:45:40','2019-03-08 23:45:40'),(4,'综合赚钱','2019-03-08 23:47:15','2019-03-08 23:47:15')
        ");
    }
}
