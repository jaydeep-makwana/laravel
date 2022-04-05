<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


$content = file_get_contents('json_data.php');
$json = json_decode($content, true);

class mobile extends Controller
{
    function getDetails($phone)
    {
    
    
        function details($index)
        {
            function data($index, $key)
            {
                global $json;
                echo $json[$index][$key];
            }
    ?>
    
            <table border>
                <tr>
                    <th>Model</th>
                    <td><?php data($index, 'modalName'); ?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><?php data($index, 'price'); ?></td>
    
                </tr>
            </table>
    <?php
        }
    
    
        switch ($phone) {
            case 'vivo':
                details(0);
                break;
            case 'mi':
                details(1);
                break;
            case 'apple':
                details(2);
                break;
    
            default:
                echo 'this modal is not available in our list';
                break;
        }
    }
}





