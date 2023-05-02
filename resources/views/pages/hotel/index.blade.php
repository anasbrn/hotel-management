@extends('layouts.hotel.layout')

@section('title', $city->getName().' '.'-'.' '.'Hotels')

@section('content')
<section class="d-flex mx-5 justify-content-center gap-5">

    <div class="card" style="width: 18rem;">
        <img src="{{ url($city->getImage()) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $city->getName() }}</h5>
            <p class="card-text">Indulge in the ultimate urban escape at our luxurious hotel nestled in the heart of the vibrant city, where you can immerse yourself in the local culture and experience the true essence of {{ $city->getName() }}.</p>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="{{ route('list-cities') }}" class="card-link">Other Cities</a>
        </div>
    </div>
    
    <div>
        @foreach ($city->hotels as $hotel)
            <a href="{{ route('show', ['id' => $hotel->getId()]) }}" class="card mb-3" style="max-width: 540px; text-decoration:none; color:black;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ url($hotel->getImage()) }}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $hotel->getName() }}</h5>
                            <p class="card-text">{{ $hotel->getDescription() }}.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endsection 