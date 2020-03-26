<?php

use Illuminate\Database\Seeder;
use App\Photo;
use Faker\Generator as Faker;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
          $newPhoto = new Photo;
          $newPhoto->user_id = rand(1, 5);
          $newPhoto->path = "https://picsum.photos/id/" . rand(1, 100) . '/300/200';
          $newPhoto->desc = $faker->sentence($nbWords = 7, $variableNbWords = true);
          $newPhoto->save();

      }  //
    }
}
