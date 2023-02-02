<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IngredientsRecipes;



class ShowrecipesController extends Controller
{
    public function index($id)
    {
        // $recipes = Recipes::all($id);
        // $ingredients = Ingredients::all();
        // return view('show_recipes', compact("recipes"));

        $recipeingredient = IngredientsRecipes::with("recipe", "ingredient")->where('recipes_id', $id)->get();
        return view('show_recipes', compact("recipeingredient"));
    }
}