<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 6; $i++) {
            Comment::create([
                'user_id' => 1,
                'commenter_id' => 1,
                'comment' => $faker->sentence,
            ]);
        }
    }
}
