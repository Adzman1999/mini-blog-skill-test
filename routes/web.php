<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->name('register');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');;

// Create New User
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');

// All Users
Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('users.index');




// ----------------------------
// blogs
Route::get('/', [BlogController::class, 'index'])->middleware('auth')->name('blogs.index');

Route::get('/blogs/create', [BlogController::class, 'create'])->middleware('auth')->name('blogs.create');

Route::post('/blogs/create', [BlogController::class, 'store'])->middleware('auth')->name('blogs.store');

Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->middleware('auth');

Route::put('/blogs/{blog}', [BlogController::class, 'update'])->middleware('auth');

Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->middleware('auth');


// ----------------------------
