<?php

namespace App\Http\Controllers;
     
use Illuminate\Http\Request;

class show_data extends Controller
{
    function show_data1(){
        $mobile = ['vivo','oppo','mi','realme','apple'];
        return view("show",["array"=>$mobile]);
    }
    function show_data2($data){
        return view("show",["data"=>"$data"]);
    }
}
