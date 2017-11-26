<?php

use App\Films;
use Illuminate\Database\Seeder;

class FilmTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Films::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 3; $i++) {

            $name = $faker->name;

            Films::create([
                'id'           => $i,
                'name'         => $name,
                'description'  => $faker->paragraph,
                'release_date' => $faker->date(),
                'rating'       => $faker->numberBetween(1, 5),
                'ticket_price' => $faker->randomFloat(2, 0, 100),
                'country'      => $faker->country,
                'genre'        => $faker->sentence(3),
                'photo'        => '',
                'slug'         => str_replace(" ", "-", $name)
            ]);
        }
    }
}
