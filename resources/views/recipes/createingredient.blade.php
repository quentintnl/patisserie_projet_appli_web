@extends('layout.app')

@section('content')

    <div class="margin-top ingredient-display">
        <form action= "{{ route('recipes.storeingredient') }}" method="POST" class="width-form">
            @csrf
            <div id="ingredient-container">
                <div class="ingredient-item display-flex margin-bottom">
                    <select name="ingredient_id[]" id="ingredient_id" class="choose-size" required>
                        <option value="" class="">Choissez les ingrédients ...</option>
                        @foreach ($ingredients as $ingredient)
                            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" id="weight" name="weight[]" class="choose-size" placeholder="Poids" required>
                </div>
            </div>
            <div class="display-flex margin-bottom">
                <button type="button" id="add-button" class="choose-size btn-ingredient-recipe">Ajouter un ingrédient</button>
                <button type="button" id="remove-ingredient" class="choose-size btn-ingredient-recipe">Supprimer un ingrédient</button>
            </div>
            <div class="display-flex margin-bottom">
                <select name="event" id="event" class="choose-size " required>
                    <option value="">Choissez le type de pâtisserie ...</option>
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}">{{ $event->name }}</option>
                    @endforeach
                </select>
                <select name="category" id="category" class="choose-size " required>
                    <option value="">Choissez l'évènements ...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="display-flex">
                <select name="recipe_id" id="recipe_id" class="choose-size " required>
                    <option value="">Choissez la recette ...</option>
                    @foreach ($recipes as $recipe)
                        <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="choose-size btn-ingredient-recipe">Ajouter la recette</button>
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
    
            let removeButton = document.getElementById('remove-ingredient');
            removeButton.addEventListener('click', function() {
                ingredientContainer.removeChild(ingredientContainer.lastElementChild);
            });
        });
    </script>
    
@endsection