<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class  InsertData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {

            DB::table('employees')->insert([
                "first_name" => $faker->firstName(),
                "last_name" => $faker->lastName(),
                "age" => 22,
                "gender" => 'male',
                "department" => $faker->jobTitle(),
                "date_of_join" => $faker->date(),
                "salary" => $faker->biasedNumberBetween(10000, 20000),
                "email" => $faker->email(),
                "mobile" => 1234567890,
                "password" => Hash::make($faker->password(6, 8)),
                "hobby" => $faker->jobTitle(),
                "image" => 'photos/left_facing.png',
            ]);
        }
    }
}
