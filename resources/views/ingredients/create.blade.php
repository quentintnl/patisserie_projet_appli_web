@extends('layout.app')

@section('content')

    <div class="margin-top">
        <h2>Ajouter un ingrédient</h2>
        <form action="{{ route('ingredients.store') }}" method="POST">
            @csrf
            <label for="name">Ingrédient : </label>
            <input type="text" id="name" name="name">
            <button type="submit">Ajouter l'ingrédient !</button>
        </form>
    </div>
@endsection