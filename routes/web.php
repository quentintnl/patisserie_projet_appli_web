<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GenericsController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\IngredientsRecipesController;

use App\Http\Requests\ImageUploadRequest;

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
Route::get('/la-recette/{id}', [RecipesController::class, 'show'])->name("recipes.show");
Route::get('/ajouter-une-recette', [RecipesController::class, 'create'])->name("recipes.create");
Route::post('/ajouter-une-recettte', [RecipesController::class, 'store'])->name("recipes.store");
// Route::get('/recette/{id}/edit', [RecipesController::class, 'edit'])->name("recipes.edit");
Route::get('/ajouter-des-ingredients-a-la-recette', [RecipesController::class, 'createingredient'])->name("recipes.createingredient");
Route::post('/ajout-des-ingredient', [RecipesController::class, 'storeingredient'])->name("recipes.storeingredient");
Route::get('/recette{id}/edit', [RecipesController::class, 'edit'])->name("recipes.edit");
Route::post('/modifier-la-recette/{id}', [RecipesController::class, 'update'])->name("recipes.update");


Route::get('/ingredient-de-la-recette/{id}/edit', [RecipesController::class, 'edit_ingredient'])->name("recipes.edit_ingredient");
Route::post('/modifier-les-ingredients/{id}', [RecipesController::class, 'update_ingredient'])->name("recipes.update_ingredient");


Route::get('/types-de-patisserie', [CategoriesController::class, 'index'])->name("categories.index");
Route::get('/categorie/{id}', [CategoriesController::class, 'show'])->name("categories.show");
Route::get('/recette/{id}', [CategoriesController::class, 'showrecipe'])->name("categories.showrecipe");
Route::get('/ajouter-une-categorie', [CategoriesController::class, 'create'])->name("categories.create");
Route::post('/ajouter-la-categorie', [CategoriesController::class, 'store'])->name("categories.store");
Route::get('/toutes-les-categories', [CategoriesController::class, 'shownamecategories'])->name("categories.shownamecategories");
Route::delete('/toutes-les-catégories', [CategoriesController::class, 'destroy'])->name("categories.destroy");

Route::get('/categorie{id}/edit', [CategoriesController::class, 'edit'])->name("categories.edit");
Route::put('/categorie/{id}', [CategoriesController::class, 'update'])->name("categories.update");

Route::get('/evenements', [EventsController::class, 'index'])->name("events.index");
Route::get('/evenements/{id}', [EventsController::class, 'show'])->name("events.show");
Route::get('/ajouter-un-evenement', [EventsController::class, 'create'])->name("events.create");
Route::post('/ajouter-l-evenement', [EventsController::class, 'store'])->name("events.store");
Route::get('/tous-les-evenemnts', [EventsController::class, 'shownameevents'])->name("events.shownameevents");
Route::delete('/tous-les-evenemnts', [EventsController::class, 'destroy'])->name("events.destroy");
Route::get('/evenement{id}/edit', [EventsController::class, 'edit'])->name("events.edit");
Route::put('/evenement/{id}', [EventsController::class, 'update'])->name("events.update");

Route::get('/tous-les-ingrédients', [IngredientsController::class, 'show'])->name("ingredients.show");
Route::get('/ajouter-un-ingredient', [IngredientsController::class, 'create'])->name("ingredients.create");
Route::post('/ajouter-un-ingredient', [IngredientsController::class, 'store'])->name("ingredients.store");
Route::delete('/tous-les-ingrédients', [IngredientsController::class, 'destroy'])->name("ingredients.destroy");
Route::get('/ingredient{id}/edit', [IngredientsController::class, 'edit'])->name("ingredients.edit");
Route::put('/ingredient/{id}', [IngredientsController::class, 'update'])->name("ingredients.update");
