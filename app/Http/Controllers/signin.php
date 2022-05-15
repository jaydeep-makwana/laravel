<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signin extends Controller
{
     function loginDetails(Request $data ){
        $data->validate([
           "email"=>"required",
           "password"=>"required"
        ]);
      //   return $data['email'];
      $data->session()->put('email',$data['email']);
        return redirect('dashboard');
     }
}
