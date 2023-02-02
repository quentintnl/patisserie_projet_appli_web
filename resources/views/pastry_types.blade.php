@extends('layout.app')

@section('content')

    <!--  gallary Section  -->
    <div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="" class="section-title">TYPE DE PATISSERIE</a>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-9.jpg') }}" alt="" class="gallary-img">
            <a href="" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-10.jpg') }}" alt="" class="gallary-img">
            <a href="" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset('imgs/gallary-11.jpg') }}" alt="" class="gallary-img">
            <a href="" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="{{ asset ('imgs/gallary-12.jpg') }}" alt="" class="gallary-img">
            <a href="" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>

@endsection