<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = "recipes";

    protected $fillable = [
        'name', 'manufacturing_process', 'preparation_time', 'cooking_time', 'conservation_council', 'nbr_people','photo'
    ];

    public function ingredients_recipes()
    {
        return $this->hasMany(IngredientRecipe::class, 'recipe_id');
    }

    public function categtoriesrecipes()
    {
        return $this->belongsToMany(CategoryRecipe::class);
    }
}
