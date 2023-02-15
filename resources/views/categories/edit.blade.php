@extends('layout.app')

@section('content')

    <div class="margin-top">
        <h2 class="add-title">Modification de la catégorie : {{ $category->name }}</h2>
        <div class="add-class">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @method('PUT')
                @csrf
                <label class="add-txt" for="name">Categorie : </label>
                <input class="add-input" type="text" id="name" name="name" value="{{ $category->name }}">
                <button class="add" type="submit">Modifier la catégorie !</button>
            </form>
        </div>
@endsection