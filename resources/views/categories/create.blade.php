@extends('layout.app')

@section('content')
    <div class="margin-top">
        <h2 class="add-title">Ajouter un type de pâtisserie</h2>
        <div class="add-class">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <label for="name" class="add-txt">Type de pâtisserie : </label>
                <input class="add-input" type="text" id="name" name="name">
                <button class="add" type="submit">Ajouter le type de pâtisserie !</button>
            </form>
        </div>
    </div>
@endsection