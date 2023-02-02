<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastryTypesController extends Controller
{
    public function index()
    {
        return view('pastryTypes.index');
    }
}
