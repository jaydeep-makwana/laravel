<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\interest;
use App\Http\Controllers\mobile;
use App\Http\Controllers\percentage;
use App\Http\Controllers\show_data;
use App\Http\Controllers\allInOne;
use App\Http\Controllers\pincode;
use App\Http\Controllers\event;
use App\Http\Controllers\login;
use App\Http\Controllers\welcome;
use App\Http\Controllers\update;

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

Route::get('/', function () {
    return view('home');
});

Route::get("show", [show_data::class, "show_data1"]);
Route::get("show/{data}", [show_data::class, "show_data2"]);


Route::get("pincode", [pincode::class, "pincode"]);

Route::get("event", [event::class, "event"]);

Route::get("login", [login::class, "login"]);

Route::get("welcome/{user}", [welcome::class, "welcome"]);

Route::get("update", [update::class, "update"]);


Route::get("clock", [allInOne::class, "clock"]);
Route::get("todo", [allInOne::class, "todo"]);
Route::get("u_reg", [allInOne::class, "u_reg"]);
Route::get("reg_log", [allInOne::class, "reg_log"]);
Route::get("js_form", [allInOne::class, "js_form"]);
Route::get("pro_lang", [allInOne::class, "pro_lang"]);
Route::get("dashboard", [allInOne::class, "dashboard"]);




Route::get("percentage/{mark1}/{mark2}/{mark3}/{mark4}/{mark5}/{mark6}", [percentage::class, "getPercentage"]);
Route::get("mobile/{phone}", [mobile::class, "getDetails"]);

Route::get("interest/{amount}/{interest}/{duration}", [interest::class, "clcInt"]);

Route::fallback(function () {
    return view('Default');
});
