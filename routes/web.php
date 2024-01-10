<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcreController;
use App\Http\Controllers\AlagoasController;

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

Route::get('/', [HomeController::class,'index']) -> name('home');

Route::get('/acre', [AcreController::class,'acre']) -> name('acre');

Route::get('/alagoas', [AlagoasController::class,'alagoas']) -> name('alagoas');