<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
          $newPost = new Post;
          $newPost->title = $faker->sentence($nbWords = 5, $variableNbWords = true);
          $newPost->slug = Str::slug($newPost->title);
          $newPost->paragraph = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
          $newPost->author = $faker->name;
          $newPost->save();

      }  //
    }
}
