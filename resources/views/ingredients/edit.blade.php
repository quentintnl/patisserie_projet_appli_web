@extends('layout.app')

@section('content')

    <div class="margin-top">
        <h2>Formulaire de modification du genre : {{ $ingredient->name }}</h2>
        <form action="{{ route('ingredients.update', $ingredient->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="name">ingredient : </label>
            <input type="text" id="name" name="name" value="{{ $ingredient->name }}">
            <button type="submit">Modifier l'ingrédient !</button>
        </form>
    @endsection