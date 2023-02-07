<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenericsController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\PastryTypesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\IngredientsRecipesController;








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

Route::get('/ajouter-une-recette', [RecipesController::class, 'create'])->name("recipes.create");
Route::post('/ajouter-une-recettte', [RecipesController::class, 'store'])->name("recipes.store");
Route::get('/recette/{id}/edit', [RecipesController::class, 'edit'])->name("recipes.edit");


Route::get('/ajouter-des-ingredients-a-la-recette', [RecipesController::class, 'createingredient'])->name("recipes.createingredient");
Route::post('/ajout-des-ingredient', [RecipesController::class, 'storeingredient'])->name("recipes.storeingredient");


Route::get('/types-de-patisserie', [PastryTypesController::class, 'index'])->name("pastryTypes.index");
Route::get('/evenements', [EventsController::class, 'index'])->name("events.index");



Route::get('/tous-les-ingrédients', [IngredientsController::class, 'show'])->name("ingredients.show");
Route::get('/ajouter-un-ingredient', [IngredientsController::class, 'create'])->name("ingredients.create");
Route::post('/ajouter-un-ingredient', [IngredientsController::class, 'store'])->name("ingredients.store");
Route::delete('/tous-les-ingrédients', [IngredientsController::class, 'destroy'])->name("ingredients.destroy");
Route::get('/ingredient{id}/edit', [IngredientsController::class, 'edit'])->name("ingredients.edit");
Route::put('/ingredient/{id}', [IngredientsController::class, 'update'])->name("ingredients.update");
