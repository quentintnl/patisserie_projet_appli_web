<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRecipe extends Model
{
    use HasFactory;

    protected $table = "events_recipes";

    protected $fillable = [
        'event_id', 'recipe_id'
    ];

    public function event()
    {
        return $this->belongsTo(event::class, "event_id");
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
