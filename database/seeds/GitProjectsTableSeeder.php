<?php

use Illuminate\Database\Seeder;

class GitProjectsTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        \DB::table('git_projects')->delete();

        \DB::table('git_projects')->insert([
            0 => [
                'id'         => 1,
                'sort'       => 1,
                'type'       => 1,
                'name'       => 'linkgeek/thinkphp-admin',
                'created_at' => '2021-07-23 21:09:04',
                'updated_at' => '2021-07-26 21:42:40',
                'deleted_at' => NULL,
            ],
            1 => [
                'id'         => 3,
                'sort'       => 3,
                'type'       => 1,
                'name'       => 'linkgeek/thinkphp-blog',
                'created_at' => '2021-07-26 21:43:26',
                'updated_at' => '2021-07-26 22:02:40',
                'deleted_at' => NULL,
            ],
            2 => [
                'id'         => 5,
                'sort'       => 5,
                'type'       => 1,
                'name'       => 'linkgeek/laravel-admin',
                'created_at' => '2021-07-26 22:03:15',
                'updated_at' => '2021-07-26 22:03:15',
                'deleted_at' => NULL,
            ],
            3 => [
                'id'         => 6,
                'sort'       => 6,
                'type'       => 1,
                'name'       => 'linkgeek/laravel-blog',
                'created_at' => '2021-07-26 22:03:23',
                'updated_at' => '2021-07-26 22:03:23',
                'deleted_at' => NULL,
            ],
        ]);
    }
}