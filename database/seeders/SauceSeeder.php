<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sauces')->insert([
            [
                 'user_id' => 1 ,
                 'name' => 'Tabasco' ,
                 'manufacturer' => 'jsp' ,
                 'description' => 'ca pique beaucoup bcp' ,
                 'main_pepper' => 'pimenkipik' , 
                 'image_url' => 'https://pro.sauce-piquante.fr/223-large_default/tabasco-habanero.jpg' , 
                 'heat' => 8 ,
                 'likes' => 80 ,
                 'dislikes' => 4 
            ],

            [
                'user_id' => 2 ,
                'name' => 'Moruga' ,
                'manufacturer' => 'jsp' ,
                'description' => 'ca pique beaucoup bcp le moruga' ,
                'main_pepper' => 'pimenkipikpikpikpik' , 
                'image_url' => 'https://www.sauce-piquante.fr/162-large_default/sauce-piquante-moruga-trinidad-scorpion.jpg' , 
                'heat' => 6 ,
                'likes' => 60 ,
                'dislikes' => 80
            ],

            [
                'user_id' => 3 ,
                'name' => 'Sun' ,
                'manufacturer' => 'jsp' ,
                'description' => 'ca brule' ,
                'main_pepper' => 'pimenkipikpikpikpikdqd' , 
                'image_url' => 'https://www.sauce-piquante.fr/modules/prestatemplatev2/page-builder/wp-content/uploads/tears.png' , 
                'heat' => 4 ,
                'likes' => 75 ,
                'dislikes' => 21 
            ],
        ]);
    }
}
