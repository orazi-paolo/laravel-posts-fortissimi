<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->title = $faker->realTextBetween(10, 15);
            $post->author = $faker->name();
            $post->description = $faker->realTextBetween(100, 150);
            $post->date = $faker->date();
            $post->save();
        }
    }
}
