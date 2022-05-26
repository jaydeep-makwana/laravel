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
        $fileName = $records->file('image')->getClientOriginalName();

        $folderName = $records->input('folderName');
        if (isset($folderName)) {

            if ($records->input('fileName') == 'original') {
                $img_path = $records->file('image')->storeAs($folderName, $fileName,'uploads');
            } else {

                $img_path = $records->file('image')->store($folderName,'uploads');
            }
        } else {

            if ($records->input('fileName') == 'original') {
                $img_path = $records->file('image')->storeAs('images', $fileName,'uploads');
            } else {

                $img_path = $records->file('image')->store('images','uploads');
            }
        }
        // $img_path = $records->file('image')->move('photos', $fileName);   # this image will save in public/photos folder
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
            "password" => Hash::make($records->input('Password')),
            "hobby" => $hobby,
            "image" => $img_path,
        ]);

        return redirect("login");
    }
    
    
    
    
    function distroy($id){
        DB::table('employees')->where('emp_id',$id)->delete();
        return redirect("admin_dashboard");
    }
}
