<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\TaskController;
/*
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

 

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('dashboard', [TaskController::class, 'dashboard']); 
Route::get('login', [TaskController::class, 'index'])->name('login');
Route::post('custom-login', [TaskController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [TaskController::class, 'registration'])->name('registration');
Route::post('custom-registration', [TaskController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [TaskController::class, 'signOut'])->name('signout');


Route::get('/', function () {
    return view('welcome');
});

