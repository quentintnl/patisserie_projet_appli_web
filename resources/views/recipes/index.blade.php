@extends('layout.app')

@section('content')

    <div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="" class="section-title">NOS RECETTES</a>
    </div>
    <div class="gallary row">
        @foreach ($recipes as $recipe)
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn position-relative-img">
            <img src="{{ asset('imgs/gallary-12.jpg') }}" alt="{{$recipe->name}}" class="gallary-img">
            {{-- <img src="{{ asset('../storage/app/' .$recipe->photo) }}" alt="" class="gallary-img"> --}}
            <p class="txt-position-absolue">{{$recipe->name}}</p>
            <a href="{{ route('recipes.show',$recipe->id) }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        @endforeach
    </div>
@endsection