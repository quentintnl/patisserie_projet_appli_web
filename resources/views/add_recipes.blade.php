@extends('layout.app')

@section('content')

<!-- book a table Section  -->
<div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
    <a class="section-title mb-5" href="">AJOUTER UNE PATISSERIE</a>
    <form class="row mb-5">
        @csrf
        <div class="content_add_pastry">
            <div class="">
                <input type="text" id="name" name="name" class="form-control form-control-lg custom-form-control" placeholder="Nom recette">
            </div>
            <div class="ingredients_nbr_people_and_preparation_time">
                <div class="ingredients_class">
                    <input type="text" id="ingredients" class="form-control form-control-lg custom-form-control ingredients" placeholder="Ingredients">
                </div>
                <div class="nbr_people_and_preparation_time">
                    <input type="text" id="nbr_people" name="nbr_people" class="form-control form-control-lg custom-form-control add_nbr_people" placeholder="Nombre de personne">
                    <input type="text" id="preparation_time" name="preparation_time" class="form-control form-control-lg custom-form-control" placeholder="Temps de préparation">                    
                </div>
            </div>
            <div class="">
                <input type="text" id="manufacturing_process" name="manufacturing_process" class="form-control form-control-lg custom-form-control preparation" placeholder="Préparation">
            </div>
            <div class="">
                <input type="text" id="cooking_time" name="cooking_time" class="form-control form-control-lg custom-form-control cooking_time" placeholder="Temps de cuisson">
            </div>
            <div class="">
                <input type="text" id="conservation_council" name="conservation_council" class="form-control form-control-lg custom-form-control conservation" placeholder="Conseil de conservation">
            </div>
            <div class="">
                <input type="text" id="photo" name="photo" class="form-control form-control-lg custom-form-control pictures" placeholder="Photo">
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary" id="rounded-btn">AJOUTER LA RECETTE</button>
    </form>
</div>

@endsection
