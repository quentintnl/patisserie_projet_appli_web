<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LarlitonController;
use App\Http\Controllers\ShowrecipesController;
use App\Http\Controllers\ShowAllrecipesController;
use App\Http\Controllers\TypesPastryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AddRecipesController;






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
    return view('index');

});

Route::get('/larliton', [LarlitonController::class, 'index'])->name("index");
Route::get('/recette/{id}', [ShowrecipesController::class, 'index'])->name("showRecipes");
Route::get('/toutes-les-recettes', [ShowAllrecipesController::class, 'index'])->name("showAllRecipes");
Route::get('/type-de-patisserie', [TypesPastryController::class, 'index'])->name("pastry_types");
Route::get('/evenements', [EventsController::class, 'index'])->name("events");

Route::get('/ajouter-une-recette', [AddRecipesController::class, 'create'])->name("add_recipes");




