<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getUserData extends Controller
{
    function user_data(Request $records)
    {
        $records->validate(['fName'=>'required']);
        return $records;
    }
}
