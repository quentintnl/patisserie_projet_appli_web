<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ingredient;
use App\Models\IngredientRecipe;



class IngredientsController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();

        return view('ingredients.index', compact("ingredients"));
    }

    public function show()
    {
        $ingredients = Ingredient::all();

        return view('ingredients.show', compact('ingredients'));
    }

    public function create()
    {
        return view('ingredients.create');
    }

    public function store(Request $request)
    {
        $ingredients = new Ingredient;
        $ingredients->name = $request->get('name');
        $ingredients->save();

        return redirect()->route("ingredients.show");
    }

    public function destroy(Request $request)
    {
        IngredientRecipe::where('ingredient_id', $request->get('ingredient_id'))->delete();
        Ingredient::destroy($request->get("ingredient_id"));

        return redirect()->route("ingredients.show");
    }

    public function edit($id)
{
    $ingredient = Ingredient::find($id);

    return view('ingredients.edit', compact("ingredient"));
}

public function update (Request $request, $id)
{
    $ingredient = Ingredient::find($id);
    $ingredient->name = $request->get('name');
    $ingredient->save();

    return redirect()->route("ingredients.show");
}

}
