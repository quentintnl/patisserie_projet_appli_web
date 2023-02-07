@extends('layout.app')

@section('content')

<div class="margin-top">
<h2> Tous les ingrédients </h2>
    <table>
        @foreach ($ingredients as $ingredient)
            <tr>
                <td>{{$ingredient->name}}</td>
                <td> <a href="{{ route('ingredients.edit', $ingredient->id) }}"> Modifier</a></td>
                <td>
                    <form action="{{ route('ingredients.destroy') }}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="ingredient_id" value="{{ $ingredient->id }}">
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('ingredients.create')}}">Ajouter un ingrédients</a>
</div>

@endsection