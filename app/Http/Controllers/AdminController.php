<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    
    function user_records(){
        # fetch records using model
        $users = User::all();
        return view("Project.admin_dashboard", ["records" => $users]);
    }
}
