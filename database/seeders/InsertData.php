<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            DB::table('employees')->insert([
                "first_name" => 'Jaydeep',
                "last_name" => 'Makwana',
                "age" => '22',
                "gender" => 'male',
                "department" => 'PHP',
                "date_of_join" => '1999-12-17',
                "salary" => '22000',
                "email" => 'jay@gmail.com',
                "mobile" => '2233556655',
                "password" => 'Jay!#2',
                "hobby" => 'Programming',
                "image" => 'photos/left_facing.png',
            ]);
        }
    }
}
