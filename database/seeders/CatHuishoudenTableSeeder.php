<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatHuishoudenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huishouden_product_array = ["stofzuiger", "dweil", "emmer"];

        foreach($huishouden_product_array as $huishouden){
            DB::table('product')->insert([
                'product' => $huishouden,
                'catname' => "huishouden",
                'description' => "placeholder",
                'image' => '/img/1.jpg',
                'owner_id' => "1"
            ]);
        }
    }
}
