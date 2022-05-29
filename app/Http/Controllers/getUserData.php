<?php

namespace App\Http\Controllers;

use App\Rules\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class getUserData extends Controller
{
    function user_data(Request $records)
    {
        $records->validate([
            "firstName" => "required | min:3 | max:10 | alpha",
            "lastName" => "required | min:3 | max:10 | alpha",
            "dob" => "required",                     # regex 
            "gender" => "required",
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
        $fileName = $records->file('image')->getClientOriginalName();

        $img_path = $records->file('image')->storeAs('photos', $fileName, 'uploads');

        // $img_path = $records->file('image')->move('photos', $fileName);   # this image will save in public/photos folder



        # save img as original/random name or spacific folder

        // $folderName = $records->input('folderName');
        // if (isset($folderName)) {

        //     if ($records->input('fileName') == 'original') {
        //         $img_path = $records->file('image')->storeAs($folderName, $fileName, 'uploads');
        //     } else {

        //         $img_path = $records->file('image')->store($folderName, 'uploads');
        //     }
        // } else {

        //     if ($records->input('fileName') == 'original') {
        //         $img_path = $records->file('image')->storeAs('images', $fileName, 'uploads');
        //     } else {

        //         $img_path = $records->file('image')->store('images', 'uploads');
        //     }
        // }


        # insert data using sql query
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
        DB::table("users")->insert([
            "first_name" => $records->input('firstName'),
            "last_name" => $records->input('lastName'),
            "DOB" => $records->input('dob'),
            "gender" => $records->input('gender'),
            "email" => $records->input('email'),
            "mobile" => $records->input('mobile'),
            "password" => Hash::make($records->input('Password')),
            "hobby" => $hobby,
            "image" => $img_path,
        ]);

        return redirect("login");
    }




    function distroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect("admin_dashboard");
    }

    function edit($id)
    {
        $data =   DB::table('users')->where('id', $id)->get();

        return view('Project.update', ['data' => $data]);
    }

    function update(Request $records, $id)
    {
        $records->validate([
            "firstName" => "required | min:3 | max:10 | alpha",
            "lastName" => "required | min:3 | max:10 | alpha",
            "gender" => "required",
            "dob" => "required ",                     # regex 
            "email" => ["required", new email],               # Custom Validation Rule using Rule Objects
            "mobile" => "required | numeric | regex:/^[0-9]{10}+$/",                                            # Custom Validation Rule using Closures
            "hobby" => "required",
            "image" => "required"
        ]);

        $hobby = implode(", ", $records->input('hobby'));
        $fileName = $records->file('image')->getClientOriginalName();
        $img_path = $records->file('image')->storeAs('photos', $fileName, 'uploads');

        DB::table('users')->where('id', $id)->update([
            "first_name" => $records->input('firstName'),
            "last_name" => $records->input('lastName'),
            "gender" => $records->input('gender'),
            "DOB" => $records->input('dob'),
            "email" => $records->input('email'),
            "mobile" => $records->input('mobile'),
            "hobby" => $hobby,
            "image" => $img_path,
        ]);


        return redirect("admin_dashboard");
    }
}
