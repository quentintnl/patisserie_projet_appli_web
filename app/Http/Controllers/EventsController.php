<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\EventRecipe;
use App\Models\Recipe;
use App\Models\IngredientRecipe;


class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact("events"));
    }

    public function show( Request $request, $id)
    {
        $recipesevents = EventRecipe::with("recipe", "event")->where('recipe_id', $id)->get();

        return view('events.show', compact("recipesevents"));
    }
}
