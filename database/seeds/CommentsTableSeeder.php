<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('comments')->delete();
        DB::table('comments')->insert([
            0 => [
                'id'            => 1,
                'oauth_user_id' => 1,
                'type'          => 1,
                'pid'           => 0,
                'article_id'    => 1,
                'content'       => '这是一篇意味深长的文章',
                'status'        => 1,
                'created_at'    => '2021-7-16 07:35:12',
                'updated_at'    => '2021-7-16 07:35:12',
                'deleted_at'    => NULL,
            ],
        ]);
    }
}
