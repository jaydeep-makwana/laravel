<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class percentage extends Controller
{
   function getPercentage($mark1,$mark2,$mark3,$mark4,$mark5,$mark6){
        $marks = $mark1+$mark2+$mark3+$mark4+$mark5+$mark6;
        echo "Total marks is => 600<br>";
        echo "Your marks is => $marks<br>";
        echo "Your percentage is => " . $marks/600*100;
   }
}
