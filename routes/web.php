<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenericsController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\PastryTypesController;
use App\Http\Controllers\EventsController;






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


Route::get('/', [GenericsController::class, 'index'])->name("generics.index");
Route::get('/toutes-les-recettes', [RecipesController::class, 'index'])->name("recipes.index");
Route::get('/recette/{id}', [RecipesController::class, 'show'])->name("recipes.show");
Route::get('/types-de-patisserie', [PastryTypesController::class, 'index'])->name("pastryTypes.index");



Route::get('/evenements', [EventsController::class, 'index'])->name("events.index");

Route::get('/ajouter-une-recette', [RecipesController::class, 'create'])->name("recipes.create");