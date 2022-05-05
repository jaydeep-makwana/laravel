<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbTest extends Controller
{
    function fetchRecord(){

        # insert record
        // DB::insert("INSERT INTO students (`name`,`standard`,`age`,`rollNo`) VALUES (?,?,?,?)",['Jaydeep',11,16,1]);

        # update record
        // DB::update("UPDATE students SET `name` = 'jack', `standard` = 12, `age` = 22, `rollNo` = 404 WHERE `id` = ?",[1]);

        # delete record
        // DB::delete("DELETE FROM students WHERE `id`=?",[19]);

        # fetch records
        $users = DB::select("SELECT * FROM students");
        return view("main.admin_dashboard",["records"=>$users]);
        
    }
}
