<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\interest;
use App\Http\Controllers\mobile;
use App\Http\Controllers\percentage;
use App\Http\Controllers\show_data;
use App\Http\Controllers\allInOne;
use App\Http\Controllers\dbTest;
use App\Http\Controllers\pincode;
use App\Http\Controllers\event;
use App\Http\Controllers\getUserData;
use App\Http\Controllers\signin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/","main.home");
Route::view("about","main.about");
Route::view("signup","main.signup");
Route::view("signin","main.signin");
Route::view("dashboard","main.dashboard")->middleware("routeMiddleware");
Route::post("login",[signin::class,"loginDetails"]);
Route::get("dbRecords",[dbTest::class,"fetchRecord"]);             # fetch data from database



Route::get("show", [show_data::class, "show_data1"]);
Route::get("show/{data}", [show_data::class, "show_data2"]);


Route::get("pincode", [pincode::class, "pincode"]);

Route::get("event", [event::class, "event"]);



Route::get("clock", [allInOne::class, "clock"]);
Route::get("todo", [allInOne::class, "todo"]);
Route::get("reg_log", [allInOne::class, "reg_log"]);
Route::get("js_form", [allInOne::class, "js_form"]);
Route::get("pro_lang", [allInOne::class, "pro_lang"]);




Route::get("percentage/{mark1}/{mark2}/{mark3}/{mark4}/{mark5}/{mark6}", [percentage::class, "getPercentage"]);
Route::get("mobile/{phone}", [mobile::class, "getDetails"]);

Route::get("interest/{amount}/{interest}/{duration}", [interest::class, "clcInt"]);


Route::post("user_data", [getUserData::class, "user_data"]);



Route::view("car_details", "car");


# group middleware
Route::group(["middleware" => ["group_middleware"]], function () {

    Route::get("group_view", function () {
        echo '<h1>Welcome to web development group</h1>';
    });
    
    Route::get('php', function () {
        echo "<h1>php</h1>";
    });
    
    Route::get('html', function () {
        echo "<h1>html</h1>";
    });
    
});


Route::fallback(function () {
    return view('Default');
});