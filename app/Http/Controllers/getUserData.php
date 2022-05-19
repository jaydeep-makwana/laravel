<?php

namespace App\Http\Controllers;

use App\Rules\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getUserData extends Controller
{
    function user_data(Request $records)
    {
        $records->validate([
            "firstName" => "required | min:3 | max:10 | alpha",
            "lastName" => "required | min:3 | max:10 | alpha",
            "age" => "required | regex:/^[0-9]/",                     # regex 
            "gender" => "required",
            "department" => "required",
            "date_of_join" => "required",
            "salary" => "required | numeric",
            "email" => ["required", new email],               # Custom Validation Rule using Rule Objects
            "mobile" => "required | numeric | regex:/^[0-9]{10}+$/",
            "Password" => ["required", function ($attribute, $value, $fail) {
                if (!preg_match('/[A-Z]/', $value) || !preg_match('/[a-z]/', $value) || !preg_match('/[\d]/', $value) || !preg_match('/[!@#$%&*]/', $value)) {
                    $fail("the $attribute must contain one uppercase,lowercase,digit and following character : !@#$%&*");
                }
            }],                                             # Custom Validation Rule using Closures
            "confirm_password" => "required | same:Password",
            "hobby" => "required",
            "image" => "required"
        ]);
        
        $hobby = implode(", ", $records->input('hobby'));

        $target_dir = "../App/";
        $img_path = $target_dir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'],$img_path);

        # insert data using query
        // DB::insert(
        //     "INSERT INTO `employees` (`first_name`,`last_name`,`age`,`gender`,`department`,`date_of_join`,`salary`,`email`,`mobile`,`password`,`hobby`) VALUES (?,?,?,?,?,?,?,?,?,?,?)",
        //     [
        //         $records->input('firstName'),
        //         $records->input('lastName'),
        //         $records->input('age'),
        //         $records->input('gender'),
        //         $records->input('department'),
        //         $records->input('date_of_join'),
        //         $records->input('salary'),
        //         $records->input('email'),
        //         $records->input('mobile'),
        //         $records->input('Password'),
        //         $hobby
        //     ]
        // );

        # insert data using query builder
        DB::table("employees")->insert([
            "first_name" => $records->input('firstName'),
            "last_name" => $records->input('lastName'),
            "age" => $records->input('age'),
            "gender" => $records->input('gender'),
            "department" => $records->input('department'),
            "date_of_join" => $records->input('date_of_join'),
            "salary" => $records->input('salary'),
            "email" => $records->input('email'),
            "mobile" => $records->input('mobile'),
            "password" => $records->input('Password'),
            "hobby" => $hobby,
            "image" => $img_path,
        ]);

        return redirect("login");
    }
}
