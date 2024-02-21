<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home
Route::get('/', HomeController::class)->name('home');

// Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog');

// dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Category
Route::resource('category', CategoryController::class);

// Post
Route::resource('posts', PostController::class);
