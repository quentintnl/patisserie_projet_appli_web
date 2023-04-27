@extends('layout.app')

@section('content')

    <div class="margin-top">
        <h2 class="add-title">Ajouter un ingrédient</h2>
        <div class="add-class">
            <form action="{{ route('ingredients.store') }}" method="POST">
                @csrf
                <label for="name" class="add-txt">Ingrédient : </label>
                <input class="add-input" type="text" id="name" name="name" required>
                <button class="add" type="submit">Ajouter l'ingrédient !</button>
            </form>
        </div>
    </div>
@endsection