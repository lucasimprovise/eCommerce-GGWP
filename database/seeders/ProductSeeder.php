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
                'name' => 'Phasmophobia',
                "price"=>'15',
                "description"=>"Ohlalala j'ai peur",
                "category"=>"Horreur",
                "gallery"=> "https://cdn.akamai.steamstatic.com/steam/apps/739630/capsule_616x353.jpg?t=1611245377"
            ],
            [
                'name' => 'CyberPunk 2077',
                "price"=>'60',
                "description"=>"Mddr trop le futur mais j'ai des bug",
                "category"=>"FPS",
                "gallery"=> "https://media.begeek.fr/2020/06/Cyberpunk-2077-660x370.jpg"
            ],
            [
                'name' => 'Final Fantasy XV',
                "price"=>'30',
                "description"=>"Tro Bo wtF",
                "category"=>"RPG",
                "gallery"=> "https://hb.imgix.net/85655dca0526df525d0f3f3b5e0a336f224e0571.jpeg?auto=compress,format&fit=crop&h=353&w=616&s=2c86b56b4dfe2dfb6d37a8c12481dea3"
            ],
            [
                'name' => 'Hades',
                "price"=>'40',
                "description"=>"God tier.",
                "category"=>"Hack n slash",
                "gallery"=> "https://cdn03.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_download_software_1/H2x1_NSwitchDS_Hades.png"
            ],


        ]);
    }
}
