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
         "email" => "required|email:filter",
         "password" => "required"
      ]);

      if (Auth::attempt($data->only('email', 'password'))) {
         $data->session()->put('user', $data['email']);
         return redirect('user_dashboard');
      } elseif (Auth::guard('admin')->attempt($data->only('email', 'password'))) {
         $data->session()->put('admin', "Hello Admin");
         return redirect('admin_dashboard');
      } else {
         return redirect('login')->with('fail', 'Invalid Email address or Password.');
      }
   }
}
