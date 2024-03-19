<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\calculCOntroller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ControlesController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\equipeController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ProjetController;
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


Route::get("/",function(){return "Bienvenu sur TP4EX2";});

Route::get("/accueil",function(){return view("layouts.accueil");})->name("accueil");

Route::get("/eleves",[ElevesController::class,"listEleve"])->name("eleves");

Route::get("/Modules",[ModulesController::class,"listModule"])->name("Modules");

Route::get("/controles",[ControlesController::class,"listControle"])->name("controles");






