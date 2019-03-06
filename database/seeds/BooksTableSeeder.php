<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Le petit Prince',
                'resume' => 'Un aviateur, le narrateur du conte, se bloque avec son avion au milieu du désert du Sahara à la suite d’une panne de moteur. Alors qu’il tente de réparer son avion, un petit garçon apparaît et lui demande de dessiner un mouton : « S’il vous plaît… dessine-moi un mouton ! ».
                Jour après jour, le narrateur découvre l’histoire du Petit Prince.',
                'price' => 12,
                'stock' => 80
            ],
            [
                'title' => 'Harry Potter à l\'école des sorciers',
                'resume' => 'Harry Potter, orphelin élevé dans une famille qui ne l\'aime pas, voit son existence bouleversée du jour au lendemain. La nuit de son onzième anniversaire, un géant vient le chercher pour l\'emmener à Poudlard, une école de sorcellerie.',
                'price' => 14,
                'stock' => 200
            ],
            [
                'title' => 'Bilbo le Hobbit',
                'resume' => 'La tranquillité de Bilbo est troublée par la venue d\'un magicien et de 13 nains qui n\'ont   qu\'une idée : récupérer le trésor volé par Smaug le dragon.',
                'price' => 17,
                'stock' => 110
            ],
            [
                'title' => 'L\'Alchimiste',
                'resume' => 'Santiago, un jeune berger andalou, part à la recherche d\'un trésor enfoui au pied des Pyramides. Sur son chemin, il fera la rencontre d\'un alchimiste.',
                'price' => 7.50,
                'stock' => 45
            ],
            [
                'title' => 'Vingt mille lieues sous les mers',
                'resume' => 'Un monstre marin, été signalé par plusieurs navires. Une expédition est organisée sur l\'Abraham Lincoln, pour chasser ce monstre inquiétant.',
                'price' => 9,
                'stock' => 80
            ],
        ]);
    }
}
