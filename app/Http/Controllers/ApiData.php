<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiData extends Controller
{
    function fetchApi()
    {
        $api_data = Http::get('https://reqres.in/api/users?page=1');
        return view('api', ['api_data' => $api_data]);
    }
}
