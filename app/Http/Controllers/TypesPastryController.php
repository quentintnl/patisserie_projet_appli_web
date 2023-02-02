<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesPastryController extends Controller
{
    public function index()
    {
        return view('pastry_types');
    }
}
