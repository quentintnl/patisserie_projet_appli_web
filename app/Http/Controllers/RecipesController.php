<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IngredientRecipe;



class RecipesController extends Controller
{

    public function index()
    {
        return view('recipes.index');
    }
    
    public function show($id)
    {
        $recipeingredient = IngredientRecipe::with("recipe", "ingredient")->where('recipe_id', $id)->get();
        return view('recipes.show', compact("recipeingredient"));
    }

    public function create()
    {
        return view('recipes.create');
    }

}