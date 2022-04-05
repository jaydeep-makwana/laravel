<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class interest extends Controller
{
    function clcInt($amount)
    {


        echo "Net Amount => $amount";
        echo "<br> Interest => 12%";
        echo "<br> Years => 15";
        echo "<br> Interest =>  " . $amount * 12 * 15 * 12 / 100;
        // echo "<br> Total Amount => " . $amount + $amount * 12 * 15 * 12 / 100;
        echo "<br>";
        echo    $amount + $amount * 12 * 15 * 12 / 100;
    }
}
