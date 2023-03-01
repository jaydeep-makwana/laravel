<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudOperationController;
use App\Http\Controllers\login;
use App\Http\Controllers\Logout;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

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



Route::get('/', [CrudOperationController::class, 'index'])->middleware('login');
Route::get('signup', [CrudOperationController::class, 'create'])->middleware('login');
Route::view('login', 'login')->middleware('login');
Route::view('user_dashboard', 'User.user_dashboard')->middleware('logout');


Route::post("user_data", [CrudOperationController::class, "store"]);
Route::post("login", [login::class, "loginDetails"]);
Route::view("about", "about")->middleware('login');
Route::view("career", "career")->middleware('login');


# fetch data using model
Route::get('admin_dashboard/{no?}', [CrudOperationController::class, "show"])->middleware('adminLogout');

# sign out user
Route::get('logout', [Logout::class, 'logout']);

# delete data 
Route::get('delete/{id}', [CrudOperationController::class, 'destroy']);

# update data 
Route::get('edit/{id}', [CrudOperationController::class, 'edit']);
Route::put('edit/{id}', [CrudOperationController::class, 'update']);

# route for check function 
Route::view('f', 'functions');

Route::get('send', function () {
    Mail::to('jay@gmail.com')->send(new TestMail);
    return redirect()->back();
});
