<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientsRecipes extends Model
{
    use HasFactory;

    protected $table = "ingredients_recipes";

    protected $fillable = [
        'weight'
    ];

    public function ingredient()
    {
        return $this->belongsTo(Ingredients::class, "ingredients_id");
    }

    public function recipe()
    {
        return $this->belongsTo(Recipes::class, "recipes_id");
    }


}

