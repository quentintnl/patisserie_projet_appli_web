@extends('layout.app')

@section('content')

<div class="margin-top display-flex">
<h2 class="all-ingredient-txt"> Tous les ingrédients </h2>
    <table class="width-form">
        @foreach ($ingredients as $ingredient)
            <tr class="display-table-ingredient">
                <td class="ingredient-size">{{$ingredient->name}}</td>
                <td class="size-table">
                    <a href="{{ route('ingredients.edit', $ingredient->id) }}" class="btn-ingredient update"> Modifier</a>
                </td>
                <td class="size-table">
                    <form action="{{ route('ingredients.destroy') }}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="ingredient_id" value="{{ $ingredient->id }}">
                        <button class="btn-ingredient" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a class="add-ingredients" href="{{ route('ingredients.create')}}">Ajouter un ingrédient</a>
</div>

@endsection