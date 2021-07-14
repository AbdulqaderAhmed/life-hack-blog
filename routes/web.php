<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now cr.eate something great!
|
*/

// public routes
Route::get('/', function(){
     return view("pages.index");
})->name("index");

// auth routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'customRegister'])->name("user.register");
Route::post('/login', [AuthController::class, 'customLogin'])->name("user.login");
Route::post('/logout', [AuthController::class, 'logout'])->name("user.logout");