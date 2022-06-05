<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    
    function user_records($num = 5){
        # fetch records using model
        $users = User::paginate($num);
        return view("Project.admin_dashboard", ["records" => $users]);
    }
}
