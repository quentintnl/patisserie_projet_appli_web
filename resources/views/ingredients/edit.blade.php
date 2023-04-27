@extends('layout.app')

@section('content')

    <div class="margin-top">
        <h2 cclass="add-title">Modification de l'ingrédient : {{ $ingredient->name }}</h2>
        <div class="add-class">
            <form action="{{ route('ingredients.update', $ingredient->id) }}" method="POST">
                @method('PUT')
                @csrf
                <label class="add-txt" for="name">Ingredient : </label>
                <input class="add-input" type="text" id="name" name="name" required value="{{ $ingredient->name }}">
                <button class="add" type="submit">Modifier l'ingrédient !</button>
            </form>
        </div>
@endsection