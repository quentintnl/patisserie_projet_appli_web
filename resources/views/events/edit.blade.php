@extends('layout.app')

@section('content')

    <div class="margin-top">
        <h2 class="add-title">Modification de l'événement : {{ $event->name }}</h2>
        <div class="add-class">
            <form action="{{ route('events.update', $event->id) }}" method="POST">
                @method('PUT')
                @csrf
                <label class="add-txt" for="name">Evénement : </label>
                <input class="add-input" type="text" id="name" name="name" value="{{ $event->name }}">
                <button class="add" type="submit">Modifier la catégorie !</button>
            </form>
        </div>
@endsection