<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('haris666');

        User::create([
            'name'     => 'Administrator',
            'email'    => 'admin@test.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 3; $i++) {
            User::create([
                'name'     => $faker->name,
                'email'    => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
