<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Facades\Hash;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => '7 Days to Die',
                "price"=>'23',
                "description"=>"Survivez contre les ennemis, et trouvez des objets qui pourront vous aider.",
                "category"=>"Horreur",
                "gallery"=> "https://s3.gaming-cdn.com/images/products/1028/271x377/7-days-to-die-early-access-cover.jpg"
            ],
            [
                'name' => 'Payday 2',
                "price"=>'10',
                "description"=>"Incarnez le personnage d'un braqueur, acceptez des contrats et gagnez en expérience.",
                "category"=>"FPS",
                "gallery"=> "https://s2.gaming-cdn.com/images/products/223/271x377/payday-2-cover.jpg"
            ],
            [
                'name' => 'Fall Guys',
                "price"=>'20',
                "description"=>"Soyez en compétition avec soixante autres prétendants pour être le dernier personnage vivant",
                "category"=>"Multijoueur",
                "gallery"=> "https://s1.gaming-cdn.com/images/products/7281/271x377/fall-guys-ultimate-knockout-cover.jpg"
            ],
            [
                'name' => 'Dark Souls Remastered',
                "price"=>'40',
                "description"=>"Un humain a été maudit par la Marque Sombre le rendant mort-vivant et évolue à Lordran dans un monde médiéval-fantastique.",
                "category"=>"RPG",
                "gallery"=> "https://s1.gaming-cdn.com/images/products/2364/271x377/dark-souls-remastered-cover.jpg"
            ],
        ]);
    }
}
