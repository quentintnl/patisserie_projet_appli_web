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

    
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $events = new Event;
        $events->name = $request->get('name');
        $events->save();

        return redirect()->route("events.index");
    }

    public function shownameevents()
    {
        $events = Event::all();

        return view('events.shownameevents', compact('events'));
    }
    
    public function edit($id)
    {
        $event = Event::find($id);
    
        return view('events.edit', compact("event"));
    }
    
    public function update (Request $request, $id)
    {
        $event = Event::find($id);
        $event->name = $request->get('name');
        $event->save();
    
        return redirect()->route("events.shownameevents");
    }

    public function destroy(Request $request)
    {
        EventRecipe::where('event_id', $request->get('event_id'))->delete();

        Event::destroy($request->get("event_id"));

        return redirect()->route("events.shownameevents");
    }
}
