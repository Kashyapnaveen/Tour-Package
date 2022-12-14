<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;


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



//Home page
Route::get('home', [HomeController::class, 'home'])->name('home');


//login api
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginApi', [LoginController::class, 'loginApi'])->name('loginApi');

//register api
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('registerApi', [RegisterController::class, 'registerApi'])->name('registerApi');


//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/create_pacakge', function () {
    return view('create_pacakge');
});
Route::post('create_pacakgeApi', [PackageController::class, 'create_pacakgeApi'])->name('create_pacakgeApi');
