<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'about'])->name('app_apropos');


Route::get('/facturation2', [HomeController::class, 'facturation2'])
        ->middleware('auth')
        ->name('app_facturation2');


Route::post('/facturation2', [HomeController::class, 'recuperer']);


Route::get('/logout', [LoginController::class, 'logout'])->name('app_logout');
