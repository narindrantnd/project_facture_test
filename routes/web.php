<?php

use App\Http\Controllers\HomeController;
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


Route::get('/facturation', [HomeController::class, 'facturation'])->name('app_facturation');


Route::post('/facturation', [HomeController::class, 'recup']);


Route::get('/facturation2', [HomeController::class, 'facturation2'])->name('app_facturation2');


Route::post('/facturation2', [HomeController::class, 'recuperer']);
