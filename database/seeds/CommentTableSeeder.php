<?php

use App\Comments;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Comments::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 3; $i++) {

            Comments::create([
                'user_id' => $i,
                'film_id' => $i,
                'comment' => $faker->paragraph()
            ]);
        }
    }
}
