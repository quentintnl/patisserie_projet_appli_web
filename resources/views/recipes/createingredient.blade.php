@extends('layout.app')

@section('content')

<div class="margin-top ingredient-display">
    {{-- <form action= "{{ route('recipes.storeingredient') }}" method="POST">
        @csrf
        <select name="ingredient_id" id="ingredient_id" class="">
            <option value="">Choissez les ingrédients ...</option>
            @foreach ($ingredients as $ingredient)
                <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
            @endforeach
        </select>
        <input type="text" id="weight" name="weight" class="" placeholder="Poids">
        <input type="hidden" id="counter" name="counter" value="1">
        <button type="button" id="add-ingredient">Ajouter un ingrédient</button>
        <select name="recipe_id" id="recipe_id" class="">
            <option value="">Choissez la recette ...</option>
            @foreach ($recipes as $recipe)
                <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
            @endforeach
        </select>
        <div>
            <button type="submit">Ajouter la recette</button>
        </div>
    </form> --}}

    <form action= "{{ route('recipes.storeingredient') }}" method="POST">
        @csrf
        <div id="ingredient-container">
            <div class="ingredient-item">
                <select name="ingredient_id" id="ingredient_id" class="">
                    <option value="">Choissez les ingrédients ...</option>
                    @foreach ($ingredients as $ingredient)
                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                    @endforeach
                </select>
                <input type="text" id="weight" name="weight" class="" placeholder="Poids">
            </div>
        </div>
        <button type="button" id="add-ingredient">Ajouter un ingrédient</button>
        <select name="recipe_id" id="recipe_id" class="">
            <option value="">Choissez la recette ...</option>
            @foreach ($recipes as $recipe)
                <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
            @endforeach
        </select>
        <div>
            <button type="submit">Ajouter la recette</button>
        </div>
</form>

<script>
document.getElementById("add-ingredient").addEventListener("click", function() {
    var ingredientContainer = document.getElementById("ingredient-container");
    var ingredientItem = ingredientContainer.getElementsByClassName("ingredient-item")[0];
    var newIngredientItem = ingredientItem.cloneNode(true);
    ingredientContainer.appendChild(newIngredientItem);
});
</script>

</div>

@endsection