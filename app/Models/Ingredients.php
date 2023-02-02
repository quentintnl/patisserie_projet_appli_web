<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    protected $table = "ingredients";

    protected $fillable = [
        'name'
    ];

    public function ingredientsrecipes()
    {
        return $this->hasMAny(IngredientsRecipes::class);
    }
}