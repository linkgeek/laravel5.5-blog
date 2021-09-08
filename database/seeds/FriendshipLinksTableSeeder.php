<?php

use Illuminate\Database\Seeder;

class FriendshipLinksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('friendship_links')->delete();
        DB::table('friendship_links')->insert([
            0 => [
                'id'         => 1,
                'name'       => 'Laravel社区',
                'url'        => 'https://learnku.com/laravel',
                'sort'       => 1,
                'created_at' => '2021-7-16 07:35:12',
                'updated_at' => '2021-7-16 07:35:12',
                'deleted_at' => NULL,
            ],
            1 => [
                'id'         => 1,
                'name'       => '加藤非博客',
                'url'        => 'https://linkgeek.com',
                'sort'       => 2,
                'created_at' => '2021-7-16 07:35:12',
                'updated_at' => '2021-7-16 07:35:12',
                'deleted_at' => NULL,
            ],
        ]);
    }
}
