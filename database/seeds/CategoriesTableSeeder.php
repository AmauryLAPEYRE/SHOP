<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Jeux de cartes'
            ],
            [
                'name' => 'Jeux de logique'
            ],
            [
                'name' => 'Jeux de rôle'
            ],
            [
                'name' => 'Jeux de lettres'
            ],
            [
                'name' => 'Jeux d\'enquêtes'
            ],
            [
                'name' => 'Jeux de dés'
            ],
            [
                'name' => 'Jeux de plateau'
            ],
        ]);
    }
}
