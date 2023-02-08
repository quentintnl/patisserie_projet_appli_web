@extends('layout.app')

@section('content')

@foreach ($recipescategories as $recipecategory)
    <div id="categories" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <p href="" class="section-title">{{$recipecategory->category->name}}</p>
    </div>
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn position-relative-img">
        <img src="{{ asset('imgs/gallary-9.jpg') }}" alt="" href="" class="gallary-img">
        <a href="{{ route('categories.showrecipe',$recipecategory->recipe->id) }}" class="txt-position-absolue">{{$recipecategory->recipe->name}}</a>
            <a href="{{ route('categories.showrecipe',$recipecategory->recipe->id) }}" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
    </div>
        @endforeach
    </div>

@endsection