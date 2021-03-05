<?php

use Illuminate\Database\Seeder;
use App\Artist;
use Faker\Generator as Faker;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20 ; $i++) {
            $newArtist = new Artist;
            $newArtist->name = $faker->name();
            $newArtist->save();
          }
    }
}
