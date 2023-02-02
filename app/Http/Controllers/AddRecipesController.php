<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AddRecipes;

class AddRecipesController extends Controller
{
    // public function index()
    // {
    //     return view('add_recipes');
    // }

    public function create()
    {
        return view('add_recipes');
    }
}
