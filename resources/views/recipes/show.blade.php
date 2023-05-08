@extends('layout.app')

@section('content')

    @foreach ($recipeingredients as $recipeingredient)
    <div class="container-fluid has-bg-overlay-show-recipes-img text-center text-light has-height-lg middle-items" id="book-table">
        <p class="section-title-name-pastry mb-5">{{ $recipeingredient->recipe->name }}</p>
        <div class="row mb-5">
            <div class="content_add_pastry">
                <div> 
                    <p type="text" id="add_nbr_people" class="form-control form-control-lg custom-form-control add_nbr_people" placeholder="Nombre de personne">{{ $recipeingredient->recipe->nbr_people }}</p>
                </div>
                <div>
                    <p type="text" id="add_preparation_time" class="form-control form-control-lg custom-form-control" placeholder="Temps de préparation">{{ $recipeingredient->recipe->preparation_time }}</p>
                </div>
                <div class="ingredients_nbr_people_and_preparation_time">
                    <div class="ingredients_class">
                        <p type="text" id="ingredients" class="form-control form-control-lg custom-form-control ingredients" placeholder="Ingredients">
                            @foreach($recipeingredients as $ingredients)
                                @if($ingredients)
                                    {{ $ingredients->ingredient->name}}<br>
                                @else
                                    <p>Ingrédient non disponible</p>
                                @endif
                            @endforeach
                        </p>
                    </div>
                    <p type="text" id="weight" name="weight" class="weight form-control form-control-lg custom-form-control margin-bottom " placeholder="Poids">
                        @foreach($recipeingredients as $weight)
                            {{$weight->weight}}<br>
                        @endforeach
                    </p>               
                </div>
                <div class="">
                    <p type="text" id="add_manufacturing" class="form-control form-control-lg custom-form-control preparation" placeholder="Préparation">{{ $recipeingredient->recipe->manufacturing_process }}</p>
                </div>
                <div class="">
                    <p type="text" id="add_cooking_time" class="form-control form-control-lg custom-form-control cooking_time" placeholder="Temps de cuisson">{{ $recipeingredient->recipe->cooking_time }}</p>
                </div>
                <div class="">
                    <p type="text" id="add_conservation_council" class="form-control form-control-lg custom-form-control conservation" placeholder="Conseil de conservation">{{ $recipeingredient->recipe->conservation_council }}</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('recipes.edit', $recipeingredient->recipe->id) }}" class="btn-ingredient update">Modifier</a>
        </div>
        <div class="text-center">
            <form id="delete-form" action="{{ route('recipes.destroy', ['id' => $recipeingredient->recipe->id]) }}" method="POST">
                @method('delete')
                @csrf
                <input type="hidden" name="id" value="{{ $recipeingredient->recipe->id }}">
                <button class="btn-ingredient" type="button" style="margin-top: 1em;" onclick="showConfirmModal()">Supprimer</button>
            </form>
        </div>
    </div>
    
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="confirmModalLabel">Confirmation de suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-secondary">
                    Êtes-vous sûr de vouloir supprimer cette recette ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" onclick="deleteRecipe()">Confirmer</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showConfirmModal() {
            $('#confirmModal').modal('show');
        }
        
        function deleteRecipe() {
            $('#delete-form').submit();
        }
    </script>
    
    @endforeach

@endsection