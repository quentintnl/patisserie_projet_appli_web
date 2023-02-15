@extends('layout.app')

@section('content')
    <div class="margin-top">
        <h2 class="add-title">Ajouter un type de pâtisserie</h2>
        <div class="add-class">
            <form action="{{ route('events.store') }}" method="POST">
                @csrf
                <label class="add-txt" for="name">Type d'Type d'événement : </label>
                <input class="add-input" type="text" id="name" name="name">
                <button class="add" type="submit">Ajouter l'événement !</button>
            </form>
        </div>
    </div>
@endsection