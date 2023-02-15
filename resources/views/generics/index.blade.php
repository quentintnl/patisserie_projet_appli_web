@extends('layout.app')

@extends('layout.header')


@section('content')
<div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
    <div class="row">
        <div class="col-lg-6 has-img-bg"></div>
        <div class="col-lg-6">
            <div class="row justify-content-center">
                <div class="col-sm-8 py-5 my-5">
                    <h2 class="mb-4">A propos de nous</h2>
                    <p>Nous sommes un site web de pâtisserie, vous trouverez et pouvez rajouter toute les pâtisserie que vous souhaitez</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--  gallary Section  -->
    <div id="recipes" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="{{ route('recipes.index') }}" class="section-title">NOS RECETTES</a>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-1.jpg') }}" alt="Tarte au pommes" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-2.jpg') }}" alt="Forêt noire" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-3.jpg')}}" alt="Paris-Brest" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-4.jpg') }}" alt="" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>

    <div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="{{ route('categories.index') }}" class="section-title">TYPE DE PATISSERIE</a>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-9.jpg') }}" alt="" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-10.jpg') }}" alt="" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset ('imgs/gallary-11.jpg') }}" alt="" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-12.jpg') }}" alt="" class="gallary-img">            
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>

    <div id="events" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="{{ route('events.index') }}" class="section-title">EVENEMENTS</a>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-5.jpg') }}" alt="NOËL" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-6.jpg') }}" alt="REGIME" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-7.jpg') }}" alt="AGRUMES" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-8.jpg') }}" alt="" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>
    
    @include('layout.foot')

@endsection
