<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SondageController;
use App\Http\Controllers\UsersController;

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

//LES ROUTES 
Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('/signup', [AuthController::class, 'dosignup'])->name('auth.dosignup');
Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');
Route::post('/signin', [AuthController::class, 'dosignin'])->name('auth.dosignin');
Route::get('/sondage2', [AuthController::class, 'sondage2'])->name('auth.sondage2');
Route::get('/profil', [AuthController::class, 'profil'])->name('auth.profil')->middleware('auth');
Route::get('/show', [UsersController::class, 'show'])->name('show')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->name('index');
