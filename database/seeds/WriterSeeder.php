<?php

use Illuminate\Database\Seeder;
use App\Writer;
use Faker\Generator as Faker;
class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
         for ($i=0; $i < 20 ; $i++) {
           $newWriter = new Writer;
           $newWriter->name = $faker->name();
           $newWriter->save();
         }
     }
 }