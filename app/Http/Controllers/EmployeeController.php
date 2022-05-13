<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    function employee_records(){
        # fetch records using model
        $users = Employee::all();
        return view("main.admin_dashboard", ["records" => $users]);
    }
}
