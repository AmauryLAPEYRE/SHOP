<?php

use Illuminate\Database\Seeder;

class CategoryGameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_game')->insert([
            [
                'category_id' => 7,
                'game_id' => 1,
            ],
            [
                'category_id' => 2,
                'game_id' => 2,
            ],
            [
                'category_id' => 1,
                'game_id' => 3,
            ],
            [
                'category_id' => 7,
                'game_id' => 4,
            ],
            [
                'category_id' => 2,
                'game_id' => 5,
            ],
        ]);
    }
}
