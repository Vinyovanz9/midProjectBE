<?php

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/add', function () {
    return view('employees\create');
});

Route::get('/view', function () {
    return view('employees\index');
});

Route::get('/change', function () {
    return view('employees\edit');
});

Route::resource('/employees', \App\Http\Controllers\EmployeeController::class);