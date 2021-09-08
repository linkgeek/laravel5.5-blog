<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        DB::table('tags')->insert([
            0 => [
                'id' => 1,
                'name' => 'Laravel',
                'created_at' => '2021-7-16 07:35:12',
                'updated_at' => '2021-7-16 07:35:12',
                'deleted_at' => NULL,
            ],
        ]);
    }
}
