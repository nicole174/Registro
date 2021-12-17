<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LoginController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'access']);

Route::post('/salir', [LoginController::class, 'salir']);

Route::get('/registro', [RegisterController::class, 'index']);

Route::post('/usuario', [RegisterController::class, 'store']);

Route::get('/formulario', [FormController::class, 'index'])->middleware('auth');

Route::post('/llenado', [FormController::class, 'store']);

Route::get('/administrador', [AdminController::class, 'index']);

Route::get('/descarga/{documento}', [AdminController::class, 'descarga'])->name('download');