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

Route::get('/', [GenericsController::class, 'index'])->name("index");
Route::get('/recette/{id}', [RecipesController::class, 'show'])->name("recipes.show");
Route::get('/toutes-les-recettes', [RecipesController::class, 'index'])->name("recipes.index");
Route::get('/types-de-patisserie', [PastryTypesController::class, 'index'])->name("pastryTypes.index");



Route::get('/evenements', [EventsController::class, 'index'])->name("events.index");

Route::get('/ajouter-une-recette', [AddRecipesController::class, 'create'])->name("add_recipes");




