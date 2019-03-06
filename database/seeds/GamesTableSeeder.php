<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'title' => 'Monopoly',
                'description' => 'Monopoly, le plus célèbre des jeux de société, a changé certains de ses pions. Retrouvez les trois petits nouveaux qui vont arpenter vos rues: le T-rex, le canard et le pingouin. Achetez, vendez et négociez pour gagner la partie. Attention à la faillite, à vous de bien choisir les rues pour ruiner vos adversaires et être le dernier sur le plateau de jeu !',
                'price' => 13,
                'stock' => 110,
            ],
            [
                'title' => 'Cluedo',
                'description' => 'Votre enfant se transforme en véritable petit détective avec le jeu Cluedo de Hasbro. A l\'aide des différents éléments qui lui sont fournis, il émet des hypothèses et cherche à identifier l\'auteur du meurtre, le lieu du meurtre, etc. Il clarifie la scène de crime. Votre enfant développe sa réflexion, apprend à faire le lien entre différents éléments pour en tirer une conclusion.
                Dans cette version, il découvre une nouvelle suspecte : le Dr Orchidée !',
                'price' => 24.99,
                'stock' => 60
            ],
            [
                'title' => 'UNO',
                'description' => 'Le jeu de cartes si populaire, qui consiste à associer des couleurs ou des chiffres, comprend désormais des cartes Joker personnalisables!Tour à tour, les joueurs tentent de se débarrasser de toutes leurs cartes en recouvrant la carte retournée en haut de la pile par une carte correspondante de leur main. Des cartes action spéciales rythment le jeu en vous aidant à battre vos adversaires. Utilisez la carte Changement de main pour échanger votre main avec celle de n\'importe quel autre joueur, et servez-vous des 3 cartes Joker personnalisables (et effaçables) pour inventer vos propres règles.',
                'price' => 7.99,
                'stock' => 40
            ],
            [
                'title' => 'Risk',
                'description' => 'Risk fait peau neuve, avec un nouveau graphisme, de nouvelles missions mais toujours le même but : la conquête stratégique du monde ! • Déplacez vos régiments, choisissez votre stratégie et commencez la conquête !• Votre mission: mettre vos ennemis en déroute, faire avancer vos soldats pour conquérir de nouveaux territoires. • Pions en 3 dimensions inspirés de l’ère napoléonienne',
                'price' => 30.99,
                'stock' => 140
            ]
        ]);
    }
}
