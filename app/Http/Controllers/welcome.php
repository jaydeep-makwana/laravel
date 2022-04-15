<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome extends Controller
{
    function welcome(){
        return view("user_welcome");
    }
}
