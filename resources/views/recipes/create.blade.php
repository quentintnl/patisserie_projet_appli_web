@extends('layout.app')

@section('content')

<div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
    <a class="section-title mb-5" href="">AJOUTER UNE PATISSERIE</a>
    <a class=" w-75 m-auto">N'oublier pas de vérifier que TOUS vos ingredients, type de pâtisserie et évènements ont été ajouter dans les rubrique "ingrédients","type de pâtisserie" et "évènements" de la barre de navigation</a>
    <form  action="{{ route('recipes.store') }}" class="row mb-5" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content_add_pastry">
            <div class="">
                <input type="text" id="name" name="name" class="form-control form-control-lg custom-form-control margin-bottom frame-width" required placeholder="Nom recette">
            </div>
            <div>
                <input type="text" id="nbr_people" name="nbr_people" class="form-control form-control-lg custom-form-control add_nbr_people margin-bottom " required placeholder="Nombre de personne">
            </div>
            <div>
                <input type="text" id="preparation_time" name="preparation_time" class="form-control form-control-lg custom-form-control margin-bottom preparation-time" required placeholder="Temps de préparation">
            </div>
            <div class="">
                <input type="text" id="manufacturing_process" name="manufacturing_process" class="form-control form-control-lg custom-form-control preparation margin-bottom frame-width" required placeholder="Préparation">
            </div>
            <div class="">
                <input type="text" id="cooking_time" name="cooking_time" class="form-control form-control-lg custom-form-control cooking_time margin-bottom frame-width" required placeholder="Temps de cuisson">
            </div>
            <div class="">
                <input type="text" id="conservation_council" name="conservation_council" class="form-control form-control-lg custom-form-control conservation margin-bottom frame-width" required placeholder="Conseil de conservation">
            </div>
            <div class="">
                <input type="file" id="photo" name="photo" class="form-control form-control-lg custom-form-control pictures margin-bottom frame-width" required placeholder="Photo">
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary" id="rounded-btn">Ajouter les ingredients</button>
    </form>
</div>

@endsection
