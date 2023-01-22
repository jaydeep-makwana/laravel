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
        // for ($i = 0; $i < 100; $i++) {

        //     DB::table('users')->insert([
        //         "first_name" => $faker->firstName(),
        //         "last_name" => $faker->lastName(),
        //         "DOB" => date("Y-m-d"),
        //         "gender" => 'male',
        //         "email" => $faker->email(),
        //         "mobile" => 1234567890,
        //         // "password" => Hash::make($faker->password(6, 8)),
        //         'password' => 123,
        //         "hobby" => $faker->jobTitle(),
        //         "image" => 'photos/twitter.png',
        //     ]);
        // }

        $admin = DB::table('admins')->where('email', 'admin@gmail.com')->exists();
        if (!$admin) {
            DB::table('admins')->insert([
                "email" => 'admin@gmail.com',
                "password" => Hash::make(123),
            ]);
        }
    }
}
