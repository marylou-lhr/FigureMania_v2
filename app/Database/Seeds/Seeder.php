<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nom' => 'Figurine Nanami Kento',
                'nom_perso' => 'Nanami Kento',
                'slug' => slug('Nanami Kento'),
                'url_image' => ('/assets/images/' + slug('Nanami Kento') + '.png'),
                'licence' => 'Jujutsu Kaisen',
                'prix' => 50
            ],
            [
                'nom' => 'Figurine Sukuna Ryomen',
                'nom_perso' => 'Sukuna Ryomen',
                'slug' => slug('Sukuna Ryomen'),
                'url_image' => ('/assets/images/' + slug('Sukuna Ryomen') + '.png'),
                'licence' => 'Jujutsu Kaisen',
                'prix' => 60
            ],
            [
                'nom' => 'Figurine Hatsune Miku',
                'nom_perso' => 'Hatsune Miku',
                'slug' => slug('Hatsune Miku'),
                'url_image' => ('/assets/images/' + slug('Hatsune Miku') + '.png'),
                'licence' => 'Vocaloid',
                'prix' => 35
            ],
            [
                'nom' => 'Figurine Wanderer',
                'nom_perso' => 'Wanderer',
                'slug' => slug('Wanderer'),
                'url_image' => ('/assets/images/' + slug('Wanderer') + '.png'),
                'licence' => 'Genshin Impact',
                'prix' => 45
            ],
            [
                'nom' => 'Figurine Ganyu',
                'nom_perso' => 'Ganyun',
                'slug' => slug('Ganyu'),
                'url_image' => ('/assets/images/' + slug('Ganyu') + '.png'),
                'licence' => 'Genshin Impact',
                'prix' => 48
            ],
            [
                'nom' => 'Figurine Elaina',
                'nom_perso' => 'Elaina',
                'slug' => slug('Elaina'),
                'url_image' => ('/assets/images/' + slug('Elaina') + '.png'),
                'licence' => 'The journey of Elaina',
                'prix' => 60
            ],
            [
                'nom' => 'Figurine Kagamine Ren',
                'nom_perso' => 'Kagamine Ren',
                'slug' => slug('Kagamine Ren'),
                'url_image' => ('/assets/images/' + slug('Kagamine Ren') + '.png'),
                'licence' => 'Vocaloid',
                'prix' => 20
            ]
        ];

        $this->db->query('INSERT INTO figurine (nom, nom_perso, url_image, licence, prix) VALUES (:nom, :nom_perso, :url_image, :licence, :prix)', $data);
    }
}

function slug($str) {
    return preg_replace('/[^A-Za-z0-9-]+/', '_', $str);
}