<?php

use Illuminate\Database\Seeder;

class newsCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            INSERT INTO `news_category` VALUES (1,'苹果资讯','2019-04-14 01:35:07','2019-04-14 01:35:07')
        ");
    }
}
