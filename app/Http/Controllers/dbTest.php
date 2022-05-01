<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbTest extends Controller
{
    function fetchRecord(){
         $users = DB::select("SELECT * FROM students");
         return view("main.admin_dashboard",["records"=>$users]);
    }
}
