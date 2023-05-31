<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

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

        foreach ($huishouder_product_array as $huishouden) {
            Product::create([
                'product' => $huishouden,
                'catname' => "huishouden",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => 1
            ]);
        }

        $entertainment_product_array = ["John Wick film", "playstation 5", "projector", "schaakspel", "sjoelbak", "xbox 360"];

        foreach ($entertainment_product_array as $entertainment) {
            Product::create([
                'product' => $entertainment,
                'catname' => "entertainment",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => 1
            ]);
        }


        $overig_product_array = ["stofzuiger", "dweil", "emmer", "kruimeldief", "spons", "schoonmaakmiddel"];

        foreach ($overig_product_array as $overig) {
            Product::create([
                'product' => $overig,
                'catname' => "overig",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => 1
            ]);
        }


        $transport_product_array = ["audi", "ferrari", "bmw", "kia", "volkswagen", "mercedes"];

        foreach ($transport_product_array as $transport) {
            Product::create([
                'product' => $transport,
                'catname' => "transport",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => 1
            ]);
        }


        $tuin_product_array = ["schoffel", "grasmaaier", "tuinstoel", "grondboor", "plantenbak", "vogelhuisje"];

        foreach ($tuin_product_array as $tuin) {
            Product::create([
                'product' => $tuin,
                'catname' => "tuin",
                'description' => "placeholder",
                'image' => 'img/1.jpg',
                'owner_id' => 1
            ]);
        }
    }
}
