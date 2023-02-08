<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRecipe extends Model
{
    use HasFactory;

    protected $table = "categories_recipes";

    protected $fillable = [
        'category_id', 'recipe_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, "recipe_id");
    }

    public function ingredient()
    {
        return $this->belongsToMany(IngredientRecipe::class);
    }
}
