@extends('layout.app')

@section('content')

    <div class="margin-top display-flex">
        <h2 class="all-ingredient-txt"> Toutes les événements </h2>
            <table class="width-form">
                @foreach ($events as $event)
                    <tr class="display-table-ingredient">
                        <td class="ingredient-size">{{$event->name}}</td>
                        <td class="size-table">
                            <a href="{{ route('events.edit', $event->id) }}" class="btn-ingredient update"> Modifier</a>
                        </td>
                        <td class="size-table">
                            <form action="{{ route('events.destroy') }}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                <button class="btn-ingredient" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

    <a class="add-ingredients" href="{{ route('events.create')}}">Ajouter un type d'événement</a>
    </div>

@endsection