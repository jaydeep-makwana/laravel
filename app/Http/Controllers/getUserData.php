<?php

namespace App\Http\Controllers;

use App\Rules\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class getUserData extends Controller
{

    function user_data(Request $records, User $user)
    {
        $records->validate(
            [
                "firstName" => "required | min:3 | max:10 | alpha",
                "lastName" => "required | min:3 | max:10 | alpha",
                "dob" => "required",
                "gender" => "required",
                "email" => ["required", new email, "unique:users,email" . $user->id],               # Custom Validation Rule using Rule Objects
                "mobile" => "required | numeric | regex:/^[0-9]{10}+$/ | unique:users,mobile" . $user->id,         # regex 
                "Password" => ["required", function ($attribute, $value, $fail) {
                    if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/', $value)) {
                        $fail("the password must contain minimum 8 and maximum 16 character and one uppercase, one lowercase, one number and one spacial character.");
                    }
                }],                                             # Custom Validation Rule using Closures
                "confirm_password" => "required | same:Password",
                "hobby" => "required",
                "image" => "required | mimes:png,jpg,jpeg,PNG "
            ],

            [
                'mobile.unique' => 'The mobile number has already been taken.',
            ]
        );


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

        return redirect("login")->with('success', 'Your account is created successfully.');
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

    function getimg()
    {
        return DB::table('users')->where('id', 3)->value('image');
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
        ]);
        $img_path = "";
        $hobby = implode(", ", $records->input('hobby'));
        if (!file_exists($records->file('image'))) {
            $img_path = DB::table('users')->where('id', $id)->value('image');
        } else {
            $fileName = $records->file('image')->getClientOriginalName();
            $img_path = $records->file('image')->storeAs('photos', $fileName, 'uploads');
        }

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
