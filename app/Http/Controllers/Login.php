<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
   function loginDetails(Request $data)
   {
      $data->validate([
         "email" => "required",
         "password" => "required"
      ]);

      if ($data['email'] === 'admin' && $data['password'] === '123') {
          $data->session()->put('admin',"ADMIN");
          return redirect('admin_dashboard');
      } else {

         $data->session()->put('email', $data['email']);
         return redirect('dashboard');
      }
   }
}
