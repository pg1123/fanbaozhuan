<?php

use Illuminate\Database\Seeder;

class admin_rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
            INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2018-05-15 00:59:53', '2018-05-15 00:59:53')
        ");
    }
}
