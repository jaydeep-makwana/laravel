<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mobile extends Controller
{


    function getDetails($phone)
    {
        $content = '[
            {"modelName":"mi","price": "7,999","color":"black"},
            {"modelName":"realme","price": "11,999","color":"dark-gray"},
            {"modelName":"samsung","price": "17,4999","color":"White"},
            {"modelName":"sony","price": "39,999","color":"light-gray"},
            {"modelName":"oppo","price": "18,999","color":"silver"},
            {"modelName":"Vivo","price": "20,999","color":"blue"},
            {"modelName":"apple","price": "59,999","color":"gold"}
            ]';

        $json = json_decode($content, true);

        switch ($phone) {

            case 'mi':
                echo "Model : " . $json[0]['modelName'] . '<br>';
                echo "Price : " . $json[0]['price'] . '<br>';
                echo "Color : " . $json[0]['color'];
                break;

            case 'realme':
                echo "Model : " . $json[1]['modelName'] . '<br>';
                echo "Price : " . $json[1]['price'] . '<br>';
                echo "Color : " . $json[1]['color'];
                break;

            case 'samsung':
                echo "Model : " . $json[2]['modelName'] . '<br>';
                echo "Price : " . $json[2]['price'] . '<br>';
                echo "Color : " . $json[2]['color'];
                break;

            case 'sony':
                echo "Model : " . $json[3]['modelName'] . '<br>';
                echo "Price : " . $json[3]['price'] . '<br>';
                echo "Color : " . $json[3]['color'];
                break;

            case 'oppo':
                echo "Model : " . $json[4]['modelName'] . '<br>';
                echo "Price : " . $json[4]['price'] . '<br>';
                echo "Color : " . $json[4]['color'];
                break;

            case 'vivo':
                echo "Model : " . $json[5]['modelName'] . '<br>';
                echo "Price : " . $json[5]['price'] . '<br>';
                echo "Color : " . $json[5]['color'];
                break;

            case 'apple':
                echo "Model : " . $json[6]['modelName'] . '<br>';
                echo "Price : " . $json[6]['price'] . '<br>';
                echo "Color : " . $json[6]['color'];
                break;


            default:
                echo 'this model is unavailable...';
                break;
        }
    }
}
