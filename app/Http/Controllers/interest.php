<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class interest extends Controller
{
    function clcInt($amount,$interest,$duration)
    {
        if (!preg_match("/\d/",$amount)) {
            echo "amount must be in numeric value.";
        }
        elseif (!preg_match("/\d/",$interest)) {
            echo "interest rate must be in numeric value.";
        }
        elseif (!preg_match("/\d/",$duration)) {
            echo "duration/year must be in numeric value.";
        }
         else {
            echo "Net Amount => $amount";
            echo "<br> Interest Rate => $interest %";
            echo "<br> Duration => $duration year";
            echo "<br> Interest Amount =>  " . $amount * $interest * $duration * 12 / 100;
            echo  "<br> Total Amount => " . ($amount + ($amount * $interest * $duration * 12 / 100));
        }
        

    }
}
