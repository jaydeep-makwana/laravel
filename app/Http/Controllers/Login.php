<?php

namespace App\Http\Controllers;

use App\Rules\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class Login extends Controller
{
   function loginDetails(Request $data)
   {
      $data->validate([
         "email" => ["required", new email],
         "password" => "required"
      ]);

      $admin_details = Admin::where(['email' => $data['email'], 'password' => $data['password']])->get();
      
      // # IMPORTANT NOTE :- if you want to login as Admin, so you need to manually insert data in into admins table.

      if (Auth::attempt($data->only('email', 'password'))) {
         $data->session()->put('user', $data['email']);
         return redirect('user_dashboard');
      } elseif (count($admin_details) !== 0) {
         $data->session()->put('admin', "Hello Admin");
         return redirect('admin_dashboard');
      } else {
         return redirect('login')->with('fail', 'Invalid Email address or Password.');
      }
   }
}
