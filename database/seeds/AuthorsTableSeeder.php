<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'firstname' => 'J. R. R.',
                'lastname' => 'Tolkien'
            ],
            [
                'firstname' => 'J. K.',
                'lastname' => 'Rowling'
            ],
            [
                'firstname' => 'Antoine de',
                'lastname' => 'Saint-Exupéry'
            ],
            [
                'firstname' => 'Paulo',
                'lastname' => 'Coelho'
            ],
            [
                'firstname' => 'Jules',
                'lastname' => 'Verne'
            ],
        ]);
    }
}
