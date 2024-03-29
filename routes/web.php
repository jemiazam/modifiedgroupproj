<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\CreateClubsController;
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
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
//loginnnn&registerr
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('logout', [AuthController::class, 'signOut'])->name('logout');
//

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('members', [MembersController::class, 'members'])->name('members');
Route::get('friends', [FriendsController::class, 'friends'])->name('friends');
Route::get('add-club', [CreateClubsController::class, 'addclub'])->name('add-club');
Route::post('club-created', [CreateClubsController::class, 'createclub'])->name('club.created');