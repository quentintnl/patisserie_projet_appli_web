@extends('layout.app')

@section('content')

<div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
    <a href="" class="section-title">Types de pâtisseries</a>
</div>
    <div class="gallary row">
        @foreach ($categories as $category)
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn position-relative-img">
                <img src="{{ asset('imgs/gallary-9.jpg') }}" alt="" class="gallary-img">
                <p class="txt-position-absolue">{{$category->name}}</p>
                <a href="{{ route('categories.show',$category->id) }}" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        @endforeach
    </div>

@endsection