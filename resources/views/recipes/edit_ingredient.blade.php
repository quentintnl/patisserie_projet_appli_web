@extends('layout.app')

@section('content')

<div class="margin-top ingredient-display">
    <form action= "{{ route('recipes.update_ingredient', ['id' => $recipe->id]) }}" method="POST" class="width-form">
        @csrf
        <div id="ingredient-container">
            @foreach ($ingredients_recipes as $ingredient_recipe)
                <div class="ingredient-item display-flex margin-bottom">
                    <select name="ingredient_id[]" id="ingredient_id" class="choose-size">
                        <option value="{{ $ingredient_recipe->ingredient->id }}" class="">{{ $ingredient_recipe->ingredient->name }}</option>
                        @foreach ($ingredients as $ingredient)
                            @if ($ingredient_recipe->ingredient->id !== $ingredient->id)
                                <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <input type="text" id="weight" name="weight[]" class="choose-size" value="{{ $ingredient_recipe->weight }}" placeholder="Poids">
                </div>
            @endforeach
        </div>
        <div class="display-flex margin-bottom">
            <button type="button" id="add-button" class="choose-size btn-ingredient-recipe">Ajouter un ingrédient</button>
            <button type="button" id="remove-ingredient" class="choose-size btn-ingredient-recipe">Supprimer un ingrédient</button>
        </div>
        <div class="display-flex">
            <button type="submit" class="choose-size btn-ingredient-recipe">Enregistrer les modifications</button>
        </div>
    </form>
</div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let addButton = document.getElementById('add-button');
            let ingredientContainer = document.getElementById('ingredient-container');
            let ingredientTemplate = document.querySelector('.ingredient-item').cloneNode(true);
        
        addButton.addEventListener('click', function() {
            let newIngredient = ingredientTemplate.cloneNode(true);
            ingredientContainer.appendChild(newIngredient);
        });
    });
    </script>

@endsection