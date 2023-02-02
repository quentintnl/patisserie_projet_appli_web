<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Events;
use App\Models\Categories;

class Recipes extends Model
{
    use HasFactory;

    protected $table = "recipes";

    protected $fillable = [
        'name', 'manufacturing_process', 'preparation_time', 'cooking_time', 'conservation_council', 'nbr_people','photo'
    ];

    // public function add_recipes()
    // {
    //     return $this->hasMAny(Events::class);
    //     return $this->hasMAny(Categories::class);
    // }

    public function ingredientsrecipes()
    {
        return $this->hasMAny(IngredientsRecipes::class);
    }
}
