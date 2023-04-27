@extends('layout.app')

@section('content')

    <div class="margin-top display-flex">
        <h2 class="all-ingredient-txt"> Toutes les catégories </h2>
            <table class="width-form">
                @foreach ($categories as $category)
                    <tr class="display-table-ingredient">
                        <td class="ingredient-size">{{$category->name}}</td>
                        <td class="size-table">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn-ingredient update"> Modifier</a>
                        </td>
                        <td class="size-table">
                            <form action="{{ route('categories.destroy') }}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="category_id" value="{{ $category->id }}">
                                <button class="btn-ingredient" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        <a class="add-category" href="{{ route('categories.create')}}">Ajouter une catégorie</a>
    </div>

@endsection