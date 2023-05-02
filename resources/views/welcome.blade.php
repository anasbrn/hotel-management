@extends('layouts.hotel.layout')

@section('title')
    Home Page
@endsection

@section('content')
<div class="d-flex mx-5 justify-content-around">       
   @foreach ($cities as $city)
       <a href="{{ route('list-cities-hotels', ['city_id' => $city->getId()]) }}" class="card" style="width: 18rem;">
            <img src="{{ url($city->getImage()) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $city->getName() }}</h5>
            </div>
        </a>
        @endforeach
</div>
@endsection