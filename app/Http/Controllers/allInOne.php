<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allInOne extends Controller
{
     function clock(){
         return view("clock");
     }
     function todo(){
         return view("todo");
     }
     function u_reg(){
         return view("user_registration");
     }
     function reg_log(){
         return view("reg_log");
     }
     function js_form(){
         return view("jsForm");
     }
     function Pro_lang(){
         return view("Pro_lang");
     }
     function dashboard(){
         return view("dashboard");
     }

}
