<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => 'Roman'
            ],
            [
                'name' => 'BD / Manga'
            ],
            [
                'name' => 'Science Fiction'
            ],
            [
                'name' => 'Policier'
            ],
            [
                'name' => 'Fantastique'
            ],
            [
                'name' => 'Biographie'
            ],
            [
                'name' => 'Horreur'
            ],
            [
                'name' => 'Nature'
            ],
            [
                'name' => 'Jeunesse'
            ],
        ]);
    }
}
