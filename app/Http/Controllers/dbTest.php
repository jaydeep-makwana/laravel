<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbTest extends Controller
{
    function fetchRecord()
    {

        # insert record
        // DB::insert("INSERT INTO employees (`name`,`standard`,`age`,`rollNo`) VALUES (?,?,?,?)",['Jaydeep',11,16,1]);

        # update record
        // DB::update("UPDATE employees SET `name` = 'jack', `standard` = 12, `age` = 22, `rollNo` = 404 WHERE `id` = ?",[1]);

        # delete record
        // DB::delete("DELETE FROM employees WHERE `id`=?",[19]);

        # fetch records using query
        // $users = DB::select("SELECT * FROM employees");
        // return view("main.admin_dashboard",["records"=>$users]);

        
    }
}
