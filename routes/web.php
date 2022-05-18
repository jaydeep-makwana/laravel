<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\interest;
use App\Http\Controllers\mobile;
use App\Http\Controllers\percentage;
use App\Http\Controllers\show_data;
use App\Http\Controllers\ApiData;
use App\Http\Controllers\dbTest;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\getUserData;
use App\Http\Controllers\login;
use App\Http\Controllers\Logout;

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


# => PROJECT ROUTES

Route::view("/", "Project.home");
Route::view("signup", "Project.signup");
Route::view('login','Project.login')->middleware('login');
Route::view('dashboard','Project.dashboard')->middleware('logout');


Route::post("user_data", [getUserData::class, "user_data"]);
Route::post("login", [login::class, "loginDetails"]);
Route::view("about", "Project.about");

Route::get("dbRecords", [dbTest::class, "fetchRecord"]);             # fetch data from database

# fetch data using model
Route::get('admin_dashboard', [EmployeeController::class, "employee_records"])->middleware('adminLogout');

# sign out user
Route::get('logout',[Logout::class,'logout']);






# => PRACTICE ROUTES

# fetch data from api
Route::view('clock','Practice.clock');
Route::view('event','Practice.event');
Route::view('form','Practice.js_form');
Route::view('pincode','Practice.pincode');
Route::view('programming','Practice.programming');
Route::view('todo','Practice.todo');

Route::get('http', [ApiData::class, 'fetchApi']);

Route::get("show", [show_data::class, "show_data1"]);
Route::get("show/{data}", [show_data::class, "show_data2"]);

Route::get("percentage/{mark1}/{mark2}/{mark3}/{mark4}/{mark5}/{mark6}", [percentage::class, "getPercentage"]);

Route::get("mobile/{phone}", [mobile::class, "getDetails"]);

Route::get("interest/{amount}/{interest}/{duration}", [interest::class, "clcInt"]);

# this route called when we call global middleware
Route::view("car_details", "Practice.car");
 
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

# => if route or variable undifind then show default page
Route::fallback(function () {
    return view('Practice.Default');
});