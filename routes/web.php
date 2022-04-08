<?php

use App\Http\Controllers\interest;
use App\Http\Controllers\mobile;
use Illuminate\Support\Facades\Route;

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

Route::get("interest/{amount}/{interest}/{duration}", [interest::class, "clcInt"]);

Route::get("/watch/", function () {
    return view("watch");
});

Route::get("mobile/{phone}",[mobile::class,"getDetails"]);