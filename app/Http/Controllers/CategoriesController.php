<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\CategoryRecipe;
use App\Models\Recipe;
use App\Models\IngredientRecipe;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact("categories"));
    }

    public function show( Request $request, $id)
    {
        $recipescategories = CategoryRecipe::with("recipe", "category")->where('recipe_id', $id)->get();

        return view('categories.show', compact("recipescategories"));
    }

    public function showrecipe( Request $request, $id)
    {
        $recipeingredients = IngredientRecipe::with("recipe", "ingredient")->where('recipe_id', $id)->get();

        return view('recipes.show', compact("recipeingredients"));
    }

}