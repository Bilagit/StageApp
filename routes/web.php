<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SondageController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;


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
Route::middleware(['auth'])->group(function(){
Route::get('/sondage2', function (Request $request) {
    $reponse = $request->query('reponse');
    return view('sondage.sondage2', ['reponse' => $reponse]);
})->name('sondage.sondage2');
Route::get('/profil', [AuthController::class, 'profil'])->name('auth.profil')->middleware('auth');
Route::get('/show', [UsersController::class, 'show'])->name('show')->middleware('auth');
Route::get('/sondage', [SondageController::class, 'sondage1'])->name('sondage.index');
Route::post('/sondage', [SondageController::class, 'store'])->name('sondage.store');
Route::get('/resultat1', [SondageController::class, 'resultat1'])->name('resultat.resultat1');
Route::get('/resultat2', [SondageController::class, 'resultat2'])->name('resultat.resultat2');
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('auth.signin');
})->name('logout');
Route::get('/', function () {
    return view('welcome');
})->name('index');
});