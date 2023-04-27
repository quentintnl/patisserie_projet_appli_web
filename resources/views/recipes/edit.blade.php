@extends('layout.app')

@section('content')

<div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
    <p clpss="section-title mb-5" href="">Modification de la recette : {{ $recipe->name }}</p>
    <form  action="{{ route('recipes.update', $recipe->id) }}" class="row mb-5" method="POST">
        @csrf
        <div class="content_add_pastry">
            <div class="">
                <input type="text" id="name" name="name" class="form-control form-control-lg custom-form-control margin-bottom frame-width" value="{{ $recipe->name }}">
            </div>
            <div>
                <input type="text" id="nbr_people" name="nbr_people" class="form-control form-control-lg custom-form-control add_nbr_people margin-bottom " value="{{ $recipe->nbr_people }}">
            </div>
            <div>
                <input type="text" id="preparation_time" name="preparation_time" class="form-control form-control-lg custom-form-control margin-bottom preparation-time" value="{{ $recipe->preparation_time }}">
            </div>
            <div class="">
                <input type="text" id="manufacturing_process" name="manufacturing_process" class="form-control form-control-lg custom-form-control preparation margin-bottom frame-width" value="{{ $recipe->manufacturing_process }}">
            </div>
            <div class="">
                <input type="text" id="cooking_time" name="cooking_time" class="form-control form-control-lg custom-form-control cooking_time margin-bottom frame-width" value="{{ $recipe->cooking_time }}">
            </div>
            <div class="">
                <input type="text" id="conservation_council" name="conservation_council" class="form-control form-control-lg custom-form-control conservation margin-bottom frame-width" value="{{ $recipe->conservation_council }}">
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary" id="rounded-btn">Modifier les ingredients</button>
    </form>
</div>