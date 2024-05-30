<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');
