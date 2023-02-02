@extends('layout.app')

@section('content')

    <!-- book a table Section  -->
    @foreach ($recipeingredient as $ri)
    {{dd($ri)}}
    <div class="container-fluid has-bg-overlay-show-recipes-img text-center text-light has-height-lg middle-items" id="book-table">
            <p class="section-title-name-pastry mb-5">
                {{ $recipe->name}}
            </p>
            <div class="row mb-5">
                <div class="content_add_pastry">
                    <div class="ingredients_nbr_people_and_preparation_time">
                        <div class="ingredients_class">
                            <p type="text" id="ingredients" class="form-control form-control-lg custom-form-control ingredients" placeholder="Ingredients">
                                
                            </p>
                        </div>
                        <div class="nbr_people_and_preparation_time">
                            <p type="text" id="add_nbr_people" class="form-control form-control-lg custom-form-control add_nbr_people" placeholder="Nombre de personne">
                                {{ $recipe->nbr_people}}
                            </p>
                            <p type="text" id="add_preparation_time" class="form-control form-control-lg custom-form-control" placeholder="Temps de préparation">
                                {{ $recipe->preparation_time}}
                            </p>                    
                        </div>
                    </div>
                    <div class="">
                        <p type="text" id="add_manufacturing" class="form-control form-control-lg custom-form-control preparation" placeholder="Préparation">
                            {{ $recipe->manufacturing_process}}
                        </p>
                    </div>
                    <div class="">
                        <p type="text" id="add_cooking_time" class="form-control form-control-lg custom-form-control cooking_time" placeholder="Temps de cuisson">
                            {{ $recipe->cooking_time}}
                        </p>
                    </div>
                    <div class="">
                        <p type="text" id="add_conservation_council" class="form-control form-control-lg custom-form-control conservation" placeholder="Conseil de conservation">
                            {{ $recipe->conservation_council}}
                        </p>
                    </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection