<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Sauce extends Seeder
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
                 'userId' => '1' ,
                 'name' => 'Tabasco' ,
                 'manufacturer' => 'jsp' ,
                 'description' => 'ca pique beaucoup bcp' ,
                 'mainPepper' => 'pimenkipik' , 
                 'imagrUrl' => 'https://pro.sauce-piquante.fr/223-large_default/tabasco-habanero.jpg' , 
                 'heat' => 8 ,
                 'likes' => 80 ,
                 'dislikes' => 4 ,
                 

            ]
        ]);
    }
}
