<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\FriendsController;
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



//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'register'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/clubs', [ClubsController::class, 'index'])->name('clubs.index');
Route::get('/members', [MembersController::class, 'index']);
Route::get('/friends', [FriendsController::class, 'index']);
