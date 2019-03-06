<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(AuthorBookTableSeeder::class);
        $this->call(GenreBookTableSeeder::class);
        $this->call(CategoryGameTableSeeder::class);

    }
}
