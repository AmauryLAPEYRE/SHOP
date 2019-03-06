<?php

use Illuminate\Database\Seeder;

class GenreBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_genre')->insert([
            [
                'book_id' => 1,
                'genre_id' => 9,
            ],
            [
                'book_id' => 2,
                'genre_id' => 5,
            ],
            [
                'book_id' => 3,
                'genre_id' => 5,
            ],
            [
                'book_id' => 4,
                'genre_id' => 5,
            ],
            [
                'book_id' => 5,
                'genre_id' => 5,
            ],
        ]);
    }
}
