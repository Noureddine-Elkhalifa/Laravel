<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\calculCOntroller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\equipeController;
use App\Http\Controllers\indexController;
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

//TP2 EX1

//Q1
// Route::get("/accueil",function(){return "Bienvenu sur notre site";});

//Q2
// Route::get("/accueil/{n}",function($x){return "Bienvenu $x";});

//Q3
// Route::get("/accueil/Anonyme",function(){return "Hello Anonyme";});
// Route::get("/",function(){return redirect("/accueil/Anonyme");});

//Q5
// Route::get("/accueil", function () {
//     return view("accueil");
// })->name("accueil");

//Q6
//php artisan route:list

//7

// Route::get("/projet", function () {
//     return view("projet");
// })->name("projet");


// Route::get("/equipes", function () {
//     return view("equipes");
// })->name("equipes");


// Route::get("/contacts", function () {
//     return view("contacts");
// })->name("contacts");

//TP2 EX2
// Route::get("/home",function(){return view("home");})->name("home");
// Route::get("/contact",function(){return view("contact");})->name("contact");
// Route::get("/apropos",function(){return view("apropos");})->name("apropos");

//TP3 EX1

// //Q2

// Route::get('/persone',[PersonneController::class,'Q1']);

// //Q3
// Route::get('/persone/{nom}',[PersonneController::class,'Q3']);

//Q5
//  Route::get('/accueil',[PersonneController::class,'Q5']) -> name('accueil');

// //6
// Route::get("/projet",ProjetController::class)->name("projet");
// Route::get("/equipe",equipeController::class)->name("equipe");
// Route::get("/contact",contactController::class)->name("contact");

//TP3 EX2

//Q3
// Route::get('/somme/{a}/{b}',[calculCOntroller::class,'somme'])->name("somme");
// Route::get('/produit/{a}/{b}',[calculCOntroller::class,'produit'])->name("produit");


// Route::get('calculator',[calculCOntroller::class,'calculator']);

//TP3 EX3

Route::get("/articles",[ArticleController::class,"index"]);
Route::get("/articles/{id}",[ArticleController::class,"show"]);