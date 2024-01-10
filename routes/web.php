<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcreController;
use App\Http\Controllers\AlagoasController;
use App\Http\Controllers\AmapaController;
use App\Http\Controllers\AmazonasController;
use App\Http\Controllers\BahiaController;
use App\Http\Controllers\CearaController;
use App\Http\Controllers\DistritoFederalController;
use App\Http\Controllers\EspiritoSantoController;
use App\Http\Controllers\GoiasController;
use App\Http\Controllers\MaranhaoController;
use App\Http\Controllers\MatoGrossoController;
use App\Http\Controllers\MatoGrossoDoSulController;
use App\Http\Controllers\MinasGeraisController;
use App\Http\Controllers\ParaController;
use App\Http\Controllers\ParaibaController;
use App\Http\Controllers\ParanaController;
use App\Http\Controllers\PernambucoController;
use App\Http\Controllers\PiauiController;
use App\Http\Controllers\RioDeJaneiroController;
use App\Http\Controllers\RioGrandeDoNorteController;
use App\Http\Controllers\RioGrandeDoSulController;
use App\Http\Controllers\RondoniaController;
use App\Http\Controllers\RoraimaController;
use App\Http\Controllers\SantaCatarinaController;
use App\Http\Controllers\SaoPauloController;
use App\Http\Controllers\SergipeController;
use App\Http\Controllers\TocantinsController;

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

Route::get('/amapa', [AmapaController::class,'amapa']) -> name('amapa');

Route::get('/amazonas', [AmazonasController::class,'amazonas']) -> name('amazonas');

Route::get('/bahia', [BahiaController::class,'bahia']) -> name('bahia');

Route::get('/ceara', [CearaController::class,'ceara']) -> name('ceara');

Route::get('/distrito', [DistritoFederalController::class,'distrito']) -> name('distrito');

Route::get('/espiritoSanto', [EspiritoSantoController::class,'espiritoSanto']) -> name('espiritoSanto');

Route::get('/goias', [GoiasController::class, 'goias'])-> name('goias');

Route::get('/maranhao', [MaranhaoController::class,'maranhao']) -> name('maranhao');

Route::get('/matoGrosso', [MatoGrossoController::class,'matoGrosso']) -> name('matoGrosso');

Route::get('/matoGrossoDoSul', [MatoGrossoDoSulController::class, 'matoGrossoDoSul']) -> name ('matoGrossoDoSul') ;

Route::get('/minasGerais', [MinasGeraisController::class,'minasGerais']) -> name('minasGerais');

Route::get('/para', [ParaController::class,'para']) -> name('para');

Route::get('/paraiba', [ParaibaController::class,'paraiba']) -> name('paraiba');

Route::get('/parana', [ParanaController::class,'parana']) -> name('parana');

Route::get('/pernambuco', [PernambucoController::class,'pernambuco']) -> name('pernambuco');

Route::get('/piaui', [PiauiController::class,'piaui']) -> name('piaui');

Route::get('/rioDeJaneiro', [RioDeJaneiroController::class,'rioDeJaneiro']) -> name('rioDeJaneiro');

Route::get('/rioGrandeDoNorte', [RioGrandeDoNorteController::class,'rioGrandeDoNorte']) -> name('rioGrandeDoNorte');

Route::get('/rioGrandeDoSul', [RioGrandeDoSulController::class,'rioGrandeDoSul']) -> name('rioGrandeDoSul');

Route::get('/rondonia', [RondoniaController::class,'rondonia']) -> name('rondonia');

Route::get('/roraima', [RoraimaController::class,'roraima']) -> name('roraima');

Route::get('/santaCatarina', [SantaCatarinaController::class,'santaCatarina']) -> name('santaCatarina');

Route::get('/saoPaulo', [SaoPauloController::class,'saoPaulo']) -> name('saoPaulo');

Route::get('/sergipe', [SergipeController::class,'sergipe']) -> name('sergipe');

Route::get('/tocantins', [TocantinsController::class,'tocantins']) -> name('tocantins');