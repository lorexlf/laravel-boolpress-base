<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

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
            $newPost->text = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $newPost->img = $faker->imageUrl($width = 1280, $height = 720);
            $newPost->save();
        }
    }
}
