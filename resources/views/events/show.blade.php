@extends('layout.app')

@section('content')

@foreach ($recipesevents as $recipeevent)
    <div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <p href="" class="section-title">{{$recipeevent->event->name}}</p>
    </div>
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn position-relative-img">
        <img src="{{ asset('imgs/gallary-9.jpg') }}" alt="" href="" class="gallary-img">
        <a href="{{ route('categories.showrecipe',$recipeevent->recipe->id) }}" class="txt-position-absolue">{{$recipeevent->recipe->name}}</a>
            <a href="{{ route('categories.showrecipe',$recipeevent->recipe->id) }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
    </div>
@endforeach

@endsection