<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\interest;
use App\Http\Controllers\mobile;
use App\Http\Controllers\percentage;
use App\Http\Controllers\show_data;

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
    return view('welcome');
});

Route::get("percentage/{mark1}/{mark2}/{mark3}/{mark4}/{mark5}/{mark6}",[percentage::class,"getPercentage"]);

Route::get("interest/{amount}/{interest}/{duration}", [interest::class, "clcInt"]);

Route::get("clock", function () {
    return view("clock");
});

Route::get("todo", function () {
    return view("todo");
});

Route::get("pincode", function () {
    return view("pincode");
});

Route::get("rl", function () {
    return view("reg_log");
});

Route::get("js_form", function () {
    return view("jsForm");
});

Route::get("programming", function () {
    return view("pro_lang");
});

Route::get("mobile/{phone}",[mobile::class,"getDetails"]);

Route::get("show",[show_data::class,"show_data1"]);
Route::get("show/{data}",[show_data::class,"show_data2"]);