<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientRecipe extends Model
{
    use HasFactory;

    protected $table = "ingredients_recipes";

    protected $fillable = [
        'ingredient_id', 'recipe_id', 'weight'
    ];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, "ingredient_id");
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, "recipe_id");
    }

}

