<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
   function getData(){
       $data =  Student::all();
       return view('model_data',['students'=>$data]);
   }
}
