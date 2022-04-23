<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getUserData extends Controller
{
    function user_data(Request $records)
    {
        $records->validate([
            "firstName" => "required | min:3 | max:10 | alpha",
            "lastName" => "required | min:3 | max:10 | alpha",
            "age" => "required | numeric",
            "gender" => "required",
            "department" => "required",
            "date_of_join" => "required",
            "salary" => "required | numeric",
            "email" => [
                "required",
                # Custom Validation Rule using Closures
                function ($attribute, $value, $fail) {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $fail("invalid $attribute format");
                    }
                }
            ],
            "Password" => "required",
            "confirm_password" => "required | same:Password",
            "hobby" => "required"
        ]);
        return $records;
    }
}
