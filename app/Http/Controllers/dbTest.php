<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbTest extends Controller
{
    function fetchRecord()
    {

        ## SQL Query

        # insert record
        // DB::insert("INSERT INTO employees (`name`,`standard`,`age`,`rollNo`) VALUES (?,?,?,?)",['Jaydeep',11,16,1]);

        # update record
        // DB::update("UPDATE employees SET `name` = 'jack', `standard` = 12, `age` = 22, `rollNo` = 404 WHERE `id` = ?",[1]);

        # delete record
        // DB::delete("DELETE FROM employees WHERE `id`=?",[19]);

        # fetch records 
        // $users = DB::select("SELECT * FROM users");
        // return view("Project.admin_dashboard",["records"=>$users]);

        // $fetchValue =  DB::select("SELECT first_name FROM employees WHERE emp_id = 1");
        //  foreach($fetchValue as $value){
        // }
        // echo $value->first_name;


        
        ## Query Builder

        # Fetch spacific value
        // return DB::table('employees')->where('emp_id',2)->value('first_name');
    }
}
