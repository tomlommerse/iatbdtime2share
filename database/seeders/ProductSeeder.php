<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huishouder_product_array = ["stofzuiger", "dweil", "emmer", "kruimeldief", "spons", "schoonmaakmiddel"];

        foreach($huishouder_product_array as $huishouden){
            DB::table('product')->insert([
                'product' => $huishouden,
                'catname' => "huishouden",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => "1"
            ]);
        }

        $entertainment_product_array = ["John Wick film", "playstion 5", "projector", "schaakspel", "sjoelbak", "xbox 360"];

        foreach($entertainment_product_array as $entertainment){
            DB::table('product')->insert([
                'product' => $entertainment,
                'catname' => "entertainment",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => "1"
            ]);
        }


        $overig_product_array = ["stofzuiger", "dweil", "emmer", "kruimeldief", "spons", "schoonmaakmiddel"];

        foreach($overig_product_array as $overig){
            DB::table('product')->insert([
                'product' => $overig,
                'catname' => "overig",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => "1"
            ]);
        }


        $transport_product_array = ["audi", "ferrari", "bmw", "kia", "volkswagen", "mercedes"];

        foreach($transport_product_array as $transport){
            DB::table('product')->insert([
                'product' => $transport,
                'catname' => "transport",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => "1"
            ]);
        }


        $tuin_product_array = ["schoffel", "grasmaaier", "tuinstoel", "grondboor", "plantenbak", "vogelhuisje"];

        foreach($tuin_product_array as $tuin){
            DB::table('product')->insert([
                'product' => $tuin,
                'catname' => "tuin",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => "1"
            ]);
        }
    }
}
