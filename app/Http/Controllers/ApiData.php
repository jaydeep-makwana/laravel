<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiData extends Controller
{
    function fetchApi()
    {
        $api_data_1 = Http::get('https://reqres.in/api/users?page=1');
        $api_data_2 = Http::get('https://reqres.in/api/users?page=2');
        return view('Practice.api', ['api_data_1' => $api_data_1,'api_data_2' => $api_data_2]);
    }
}
