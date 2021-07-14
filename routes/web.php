<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;

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
Route::get('/', [PostsController::class, 'index'])->name("index");
Route::get('/show/{id}', [PostsController::class, 'show'])->name("post.show");
Route::get('/search', [PostsController::class, 'search'])->name("post.search");
Route::get('/about', [PostsController::class, 'about'])->name("post.about");
Route::get('/contact', [PostsController::class, 'contact'])->name("post.contact");

// auth routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'customRegister'])->name("user.register");
Route::post('/login', [AuthController::class, 'customLogin'])->name("user.login");
Route::post('/logout', [AuthController::class, 'logout'])->name("user.logout");

// private routes

Route::get('/create', [PostsController::class, 'create'])->name("post.create");
Route::post('/store', [PostsController::class, 'store'])->name("post.store");