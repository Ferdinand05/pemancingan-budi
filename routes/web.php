<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Bootstrap\RegisterProviders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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





// auth
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');


Route::middleware('auth')->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('settings', SettingsController::class);

    Route::put('update-password', [UpdatePasswordController::class, 'update'])->name('update.password');
});


// reset passwordr
Route::get('forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('forgot-password', [LoginController::class, 'forgot_password_store'])->name('forgot-password-store');
Route::get('reset-password/{token}', [LoginController::class, 'reset_password'])->name('reset-password');
Route::post('reset-password', [LoginController::class, 'reset_password_store'])->name('reset-password-store');







// Route::middleware('role:admin')->group(function () {
// });

// middleware 
Route::group(['middleware' => ['role:admin']], function () {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Category
    Route::resource('category', CategoryController::class);

    // Post
    Route::resource('posts', PostController::class);


    // users

    Route::controller(UserController::class)->group(function () {
        Route::get('users', 'index')->name('users');
        Route::get('users/{username}/edit', 'edit')->name('users.edit');
        Route::put('users/{username}', 'update')->name('users.update');
        Route::delete('users/{username}', 'destroy')->name('users.destroy');
    });
});
