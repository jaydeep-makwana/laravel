<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getUserData extends Controller
{
    function user_data(Request $records)
    {
        return $records;
    }
}
