<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class dbTest extends Controller
{
    function fetchRecord()
    {
        //  echo  Auth::id();

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

        
        // $img_path = $records->file('image')->move('photos', $fileName);   # this image will save in public/photos folder



        # save img as original/random name or spacific folder

        // $folderName = $records->input('folderName');
        // if (isset($folderName)) {

        //     if ($records->input('fileName') == 'original') {
        //         $img_path = $records->file('image')->storeAs($folderName, $fileName, 'uploads');
        //     } else {

        //         $img_path = $records->file('image')->store($folderName, 'uploads');
        //     }
        // } else {

        //     if ($records->input('fileName') == 'original') {
        //         $img_path = $records->file('image')->storeAs('images', $fileName, 'uploads');
        //     } else {

        //         $img_path = $records->file('image')->store('images', 'uploads');
        //     }
        // }


        # insert data using sql query
        // DB::insert(
        //     "INSERT INTO `employees` (`first_name`,`last_name`,`age`,`gender`,`department`,`date_of_join`,`salary`,`email`,`mobile`,`password`,`hobby`) VALUES (?,?,?,?,?,?,?,?,?,?,?)",
        //     [
        //         $records->input('firstName'),
        //         $records->input('lastName'),
        //         $records->input('age'),
        //         $records->input('gender'),
        //         $records->input('department'),
        //         $records->input('date_of_join'),
        //         $records->input('salary'),
        //         $records->input('email'),
        //         $records->input('mobile'),
        //         $records->input('Password'),
        //         $hobby
        //     ]
        // );

    //    return Crypt::encryptString('$2y$10$yZ/SHy6jly.tQ3Rxf6nX7OZjxpC.NwJeHP7zDbMqX2UDMy3.ruGGm');
    //    return Crypt::decrypt('$2y$10$yZ/SHy6jly.tQ3Rxf6nX7OZjxpC.NwJeHP7zDbMqX2UDMy3.ruGGm');

    }
}
