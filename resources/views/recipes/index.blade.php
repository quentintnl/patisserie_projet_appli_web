@extends('layout.app')

@section('content')

    <div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="" class="section-title">NOS RECETTES</a>
    </div>
    <div class="gallary row">
        @foreach ($recipes as $recipe)
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-1.jpg') }}" alt="Tarte au pommes" class="gallary-img">
            <a href="{{ route('recipes.show',$recipe->id) }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        @endforeach
    </div>


@endsection