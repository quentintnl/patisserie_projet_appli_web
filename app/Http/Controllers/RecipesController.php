<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;

use App\Models\IngredientRecipe;



class RecipesController extends Controller
{

    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact("recipes"));
    }
    
    public function show( Request $request, $id)
    {

        $recipeingredients = IngredientRecipe::with("recipe", "ingredient")->where('recipe_id', $id)->get();
        return view('recipes.show', compact("recipeingredients"));
    }

    public function create()
    {
        return view('recipes.create');
    }

}