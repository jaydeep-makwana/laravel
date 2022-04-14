<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programming extends Controller
{
     function web($classes){
        return view("pro_lang",["nameOfClasses" => $classes]) ;
     }
}
