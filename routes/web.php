<?php

use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\RecepcioneController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

//Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

//Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/register-blank', [App\Http\Controllers\Auth\RegisterController::class, 'showBlankRegistrationForm'])->name('register-blank');

Route::get('/diagnostico.create', [App\Http\Controllers\DiagnosticoController::class, 'create'])->name('diagnostico.create')->middleware('auth');

Route::resource('recepciones', RecepcioneController::class)->middleware('auth');

Route::resource('diagnosticos', DiagnosticoController::class)->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
