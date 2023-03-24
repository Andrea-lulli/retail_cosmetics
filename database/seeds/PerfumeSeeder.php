<?php

use App\Models\Perfume;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {

            $newPerfume = new Perfume();
            $newPerfume->name = $faker->firstName();
            $newPerfume->brand = $faker->bs();
            $newPerfume->category = $faker->words(3 , true);
            $newPerfume->price = $faker->randomFloat(2, 40, 120);
            $newPerfume->image = $faker->imageUrl(360, 360, 'animals', true);
            $newPerfume->save();


        }
    }
}
