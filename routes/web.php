<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\interest;
use App\Http\Controllers\mobile;
use App\Http\Controllers\percentage;
use App\Http\Controllers\show_data;
use App\Http\Controllers\allInOne;
use App\Http\Controllers\ApiData;
use App\Http\Controllers\dbTest;
use App\Http\Controllers\EmployeeController;
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

Route::view("/", "main.home");
Route::view("signup", "main.signup");

# redirect user to dashboard if user alrady login
Route::get("signin", function () {
    if (session()->has('email')) {
        return view('main.dashboard');
    }
    return view('main.signin');
});


# redirect to login page if user not logged
Route::get("dashboard",function(){
    if (!session()->has('email')) {
        return view('main.signin');
    }
    return view('main.dashboard');
});

Route::post("user_data", [getUserData::class, "user_data"]);
Route::post("login", [signin::class, "loginDetails"]);
Route::view("about", "main.about");

Route::get("dbRecords", [dbTest::class, "fetchRecord"]);             # fetch data from database

# fetch data using model
Route::get('admin_dashboard', [EmployeeController::class, "employee_records"]);

# sign out user
Route::get('signout', function () {
    if (session()->has('email')) {
        session()->pull('email');
    }
    return redirect('signin');
});


# fetch data from api
Route::get('http', [ApiData::class, 'fetchApi']);
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
