@extends('layout.app')

@section('content')

    <div class="margin-top ingredient-display">
        <form action= "{{ route('recipes.storeingredient') }}" method="POST" class="width-form">
            @csrf
            <div id="ingredient-container">
                <div class="ingredient-item display-flex margin-bottom">
                    <select name="ingredient_id" id="ingredient_id" class="choose-size">
                        <option value="" class="">Choissez les ingrédients ...</option>
                        @foreach ($ingredients as $ingredient)
                            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" id="weight" name="weight" class="choose-size" placeholder="Poids">
                </div>
            </div>
            <div class="display-flex margin-bottom">
                <button type="button" id="add-ingredient" class="choose-size btn-ingredient-recipe">Ajouter un ingrédient</button>
                <button type="button" id="remove-ingredient" class="choose-size btn-ingredient-recipe">Supprimer un ingrédient</button>
            </div>
            <div class="display-flex">
                <select name="recipe_id" id="recipe_id" class="choose-size ">
                    <option value="">Choissez la recette ...</option>
                    @foreach ($recipes as $recipe)
                        <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="choose-size btn-ingredient-recipe">Ajouter la recette</button>
            </div>
        </form>

        <script>
            document.getElementById("add-ingredient").addEventListener("click", function() {
                var select = document.querySelector('select[name="ingredient_id"]');
                var clone = select.cloneNode(true);
                document.body.appendChild(clone);
            });

            document.getElementById("add-ingredient").addEventListener("click", function() {
                var select = document.querySelector('input[name="weight"]');
                var clone = select.cloneNode(true);
                document.body.appendChild(clone);
            });

            document.getElementById("remove-ingredient").addEventListener("click", function() {
            var select = document.querySelectorAll('select[name="ingredient_id"]');
            if (select.length > 1) {
            var lastSelect = select[select.length - 1];
            lastSelect.parentNode.removeChild(lastSelect);
            }
            });

            document.getElementById("remove-ingredient").addEventListener("click", function() {
            var select = document.querySelectorAll('input[name="weight"]');
            if (select.length > 1) {
            var lastSelect = select[select.length - 1];
            lastSelect.parentNode.removeChild(lastSelect);
            }
            });
        </script>
    </div>

@endsection