@extends('layout.app')

@section('content')

    <div class="margin-top">
        <h2 class="all-ingredient-txt">Modification de l'ingrédient : {{ $ingredient->name }}</h2>
        <form action="{{ route('ingredients.update', $ingredient->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="name">Ingredient : </label>
            <input type="text" id="name" name="name" value="{{ $ingredient->name }}">
            <button type="submit">Modifier l'ingrédient !</button>
        </form>
@endsection