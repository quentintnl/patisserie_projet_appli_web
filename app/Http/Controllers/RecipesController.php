<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\IngredientRecipe;

class RecipesController extends Controller
{

    public function index()
    {
        $recipes = Recipe::all();

        return view('recipes.index', compact("recipes"));
    }

    public function create()
    {
        $ingredients = Ingredient::all();

        return view('recipes.create', compact("ingredients"));
    }

    public function store(Request $request)
    {
    $recipe = new Recipe;
    $recipe->name = $request->get('name');
    $recipe->manufacturing_process = $request->get('manufacturing_process');
    $recipe->preparation_time = $request->get('preparation_time');
    $recipe->cooking_time = $request->get('cooking_time');
    $recipe->conservation_council = $request->get('cooking_time');
    $recipe->nbr_people = $request->get('nbr_people');
    $recipe->photo = $request->get('photo');
    $recipe->save();

    return redirect()->route('recipes.createingredient');
    }
    
    public function show( Request $request, $id)
    {
        $recipeingredients = IngredientRecipe::with("recipe", "ingredient")->where('recipe_id', $id)->get();

        return view('recipes.show', compact("recipeingredients"));
    }

    public function edit($id)
    {
        $ingredients = Ingredient::find($id);

        return view('recipe.edit', compact("ingredient"));
    }

    public function createingredient()
    {
        $ingredients = Ingredient::all();
        $recipes = Recipe::all();

        return view('recipes.createingredient', compact("ingredients", "recipes"));
    }

    public function storeingredient(Request $request)
    {
            $ingredientsrecipe = new IngredientRecipe();
            $ingredientsrecipe->weight = $request->get('weight');
            $ingredientsrecipe->ingredient_id = $request->get('ingredient_id');
            $ingredientsrecipe->recipe_id = $request->get('recipe_id');
            $ingredientsrecipe->save();

        return redirect()->route ("recipes.index");
    }
}