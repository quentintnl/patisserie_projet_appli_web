<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\IngredientRecipe;
use App\Models\UploadImageController;

use App\Http\Requests\ImageUploadRequest;

use Illuminate\Support\Facades\Storage;

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
    
    if ($request->file('photo')) 
    {
        $fileName = time().'_'.$request->file('photo')->getClientOriginalName();
        $filePath = $request->file('photo')->store($fileName);
        $recipe->photo = $filePath;
    }

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

    public function createingredient(Request $request)
    {        
        $ingredients = Ingredient::all();
        $recipes = Recipe::all();

        return view('recipes.createingredient', compact("ingredients", "recipes"));
    }

    public function storeingredient(Request $request)
    {
        $weights = $request->input('weight');
        $ingredientIds = $request->input('ingredient_id');
        $recipeId = $request->input('recipe_id');
        
        for ($i = 0; $i < count($weights); $i++) {
            $ingredientsrecipe = new IngredientRecipe();
            $ingredientsrecipe->weight = $weights[$i];
            $ingredientsrecipe->ingredient_id = $ingredientIds[$i];
            $ingredientsrecipe->recipe_id = $recipeId;
            $ingredientsrecipe->save();
        }

        return redirect()->route ("recipes.index");
    }
}