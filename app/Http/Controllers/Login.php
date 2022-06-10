<?php

namespace App\Http\Controllers;

use App\Rules\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
   function loginDetails(Request $data)
   {
      $data->validate([
         "email" => ["required", new email],
         "password" => "required"
      ]);
      
      if ($data['email'] === 'admin@gmail.com' && $data['password'] === '123') {
          $data->session()->put('admin',"Hello Admin");
          return redirect('admin_dashboard');
      } elseif(Auth::attempt($data->only('email','password'))) {

         $data->session()->put('email', $data['email']);
         return redirect('user_dashboard');
      }else{
         return redirect('login')->with('fail','Invalid Email address or Password.');
      }
   }
}