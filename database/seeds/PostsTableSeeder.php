<?php

use Illuminate\Database\Seeder;
use App\Post;
use faker\factories as faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 12; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $newPost->text = $faker->paragraphs($nb = 3, $asText = false);
            $newPost->img = $faker->imageUrl($width = 1280, $height = 720);
            $newPost->save();
        }
    }
}
