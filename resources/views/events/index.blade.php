@extends('layout.app')

@section('content')

    <div id="events" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <a href="" class="section-title">EVENEMENTS</a>
    </div>
    <div class="gallary row">
        @foreach ($events as $event)
            <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn position-relative-img">
                <img src=" {{ asset ('imgs/gallary-5.jpg') }}" alt="NOËL" class="gallary-img">
                <p class="txt-position-absolue">{{$event->name}}</p>
                <a href="{{ route('events.show',$event->id) }}" class="gallary-overlay">
                    <i class="gallary-icon ti-plus"></i>
                </a>
            </div>
        @endforeach
    </div>
    <div class="add-pastry-types">
        <a class="add-category" href="{{ route('events.create')}}">Ajouter un type d'événement</a>
        <a href="{{ route('events.shownameevents') }}" class="btn-ingredient update center-btn"> Voir tous les événemment</a>
    </div>


@endsection