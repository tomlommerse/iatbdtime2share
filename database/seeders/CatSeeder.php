<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat_array = ['huishouden', 'tuin', 'transport', 'entertainment', 'overig'];

        foreach($cat_array as $cat){
            DB::table('cat')->insert([
                'catname' => $cat
            ]);
        }

    }
}
