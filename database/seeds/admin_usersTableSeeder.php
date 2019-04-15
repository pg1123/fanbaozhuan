<?php

use Illuminate\Database\Seeder;

class admin_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('
            INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
                (1, "admin",
 "$2y$10$AXWYa9cpgy/CO1zca3OYLuP048LtYUTImQSzrSiE.tjR1IMewIOTm","Administrator", NULL, NULL, "2019-03-09 07:11:40", "2019-03-09 07:11:40")
                ');
    }
}
