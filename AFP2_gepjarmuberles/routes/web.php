<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('home');
});


Route::get('/', [PagesController::class, 'getHome'])->name('home');

Route::get('/cars', [PagesController::class, 'getCars'])->name('cars');

Route::get('/profile', [PagesController::class, 'getProfile'])->name('profile');

Route::get('/rentacar', [PagesController::class, 'getRentACar'])->name('rentacar');

Route::get('/register', [PagesController::class, 'register'])->name('auth.register');

Route::get('/login', [PagesController::class, 'login'])->name('auth.login');
