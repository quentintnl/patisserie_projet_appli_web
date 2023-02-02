@extends('layout.app')

@section('content')

    <!--  gallary Section  -->
    <div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="" class="section-title">NOS RECETTES</a>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-1.jpg') }}" alt="Tarte au pommes" class="gallary-img">
            <a href="{{ route('showRecipes') }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-2.jpg') }}" alt="Forêt noire" class="gallary-img">
            <a href="{{ route('showRecipes') }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-3.jpg') }}" alt="Paris-Brest" class="gallary-img">
            <a href="{{ route('showRecipes') }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-4.jpg') }}" alt="" class="gallary-img">
            <a href="{{ route('showRecipes') }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>

@endsection