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

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $categories = new Category;
        $categories->name = $request->get('name');
        $categories->save();

        return redirect()->route("categories.index");
    }

    public function shownamecategories()
    {
        $categories = Category::all();

        return view('categories.shownamecategories', compact('categories'));
    }
    
    public function edit($id)
    {
        $category = Category::find($id);
    
        return view('categories.edit', compact("category"));
    }
    
    public function update (Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();
    
        return redirect()->route("categories.shownamecategories");
    }

    public function destroy(Request $request)
    {
        CategoryRecipe::where('category_id', $request->get('category_id'))->delete();

        Category::destroy($request->get("category_id"));

        return redirect()->route("categories.shownamecategories");
    }
}