<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\IngredientRecipe;
use App\Models\UploadImageController;
use App\Models\EventRecipe;
use App\Models\Event;
use App\Models\CategoryRecipe;
use App\Models\Category;

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

    public function createingredient(Request $request)
    {        
        $ingredients = Ingredient::all();
        $recipes = Recipe::all();
        $events = Event::all();
        $categories = Category::all();

        return view('recipes.createingredient', compact("ingredients", "recipes", "events", "categories"));
    }

    public function storeingredient(Request $request)
    {
        $weights = $request->input('weight');
        $ingredientIds = $request->input('ingredient_id');
        $recipeId = $request->input('recipe_id');

        // $recipeId = $request->input('recipe_id');
        $event = new EventRecipe();
        $event->event_id = $request->input('event');
        $event->recipe_id = $recipeId;
        $category = new CategoryRecipe();
        $category->category_id = $request->input('category');
        $category->recipe_id = $recipeId;

        for ($i = 0; $i < count($weights); $i++) {
            $ingredientsrecipe = new IngredientRecipe();
            $ingredientsrecipe->weight = $weights[$i];
            $ingredientsrecipe->ingredient_id = $ingredientIds[$i];
            $ingredientsrecipe->recipe_id = $recipeId;
            $ingredientsrecipe->save();
        }
        $event->save();
        $category->save();

        return redirect()->route ("recipes.index");
    }

    public function edit($id)
    {
        $recipe = Recipe::find($id);

        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        $recipe->name = $request->get('name');
        $recipe->manufacturing_process = $request->get('manufacturing_process');
        $recipe->preparation_time = $request->get('preparation_time');
        $recipe->cooking_time = $request->get('cooking_time');
        $recipe->conservation_council = $request->get('cooking_time');
        $recipe->nbr_people = $request->get('nbr_people');
        $recipe->save();

        return redirect()->route("recipes.edit_ingredient", ['id' => $id]);
    }

    public function edit_ingredient($id)
    {
        $recipe = Recipe::findOrFail($id);
        $ingredients = Ingredient::all();
        $ingredients_recipes = $recipe->ingredients_recipes()->with('ingredient')->get();
    
        return view('recipes.edit_ingredient', compact('recipe', 'ingredients', 'ingredients_recipes'));
    }
    
    public function update_ingredient(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->ingredients_recipes()->delete();
    
        $weights = $request->get('weight');
        $ingredientIds = $request->get('ingredient_id');
    
        for ($i = 0; $i < count($weights); $i++) {
            $ingredientsrecipe = new IngredientRecipe();
            $ingredientsrecipe->weight = $weights[$i];
            $ingredientsrecipe->ingredient_id = $ingredientIds[$i];
            $recipe->ingredients_recipes()->save($ingredientsrecipe);
        }
    
        return redirect()->route('recipes.show', ['id' => $recipe->id]);
    }

    
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        // Supprime les clé etrangere pour cette recette
        DB::table('categories_recipes')->where('recipe_id', $id)->delete();
        DB::table('events_recipes')->where('recipe_id', $id)->delete();
        DB::table('ingredients_recipes')->where('recipe_id', $id)->delete();

        $recipe = Recipe::findOrFail($id);
        $recipe->delete();
        
        return redirect()->route('recipes.index')->with('success', 'La recette a été supprimée avec succès.');
    }

}