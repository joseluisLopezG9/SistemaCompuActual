<?php

use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\RecepcioneController;
use App\Http\Controllers\Auth\RegisterController;
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
    notify('', 'Bienvenido de vuelta a CompuActual!', '');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

//Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

//Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

//Route::post('/register/form', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

//Route::get('/register', [App\Http\Controllers\WelcomeController::class, 'showUsers'])->name('register');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/register/{user}/edit', [App\Http\Controllers\WelcomeController::class, 'editUser'])->name('users.edit');

Route::put('/register/users/{user}', [App\Http\Controllers\WelcomeController::class, 'updateUser'])->name('users.update');

Route::delete('/register/users/{user}', [App\Http\Controllers\WelcomeController::class, 'destroyUser'])->name('users.destroy');

Route::get('/register-blank', [App\Http\Controllers\Auth\RegisterController::class, 'showBlankRegistrationForm'])->name('register-blank');

Route::get('/diagnostico.create', [App\Http\Controllers\DiagnosticoController::class, 'create'])->name('diagnostico.create')->middleware('auth');

Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat')->middleware('auth');

Route::get('/notifications', [App\Http\Controllers\NotificationController::class, 'index'])->name('notifications')->middleware('auth');

Route::post('/notification/{id}', [App\Http\Controllers\NotificationController::class, 'sendNotification'])->name('notification')->middleware('auth');

Route::post('/notificationSmart/{id}', [App\Http\Controllers\NotificationController::class, 'sendNotificationSmartwatch'])->name('notificationSmart')->middleware('auth');

Route::resource('recepciones', RecepcioneController::class)->middleware('auth');

Route::resource('diagnosticos', DiagnosticoController::class)->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


