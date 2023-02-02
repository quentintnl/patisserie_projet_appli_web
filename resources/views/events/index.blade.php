@extends('layout.app')

@section('content')

<!--  gallary Section  -->
    <div id="events" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="" class="section-title">EVENEMENTS</a>
    </div>
<div class="gallary row">
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img src=" {{ asset ('imgs/gallary-5.jpg') }}" alt="NOËL" class="gallary-img">
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

@endsection