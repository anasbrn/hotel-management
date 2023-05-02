@extends('layouts.hotel.layout')

@section('title')
    {{ $hotel->getName() }}
@endsection

@section('content')
    {{-- <p>{{ $hotel->getName() }}</p>
    <p>{{ $hotel->getDescription() }}</p>
    <p>{{ $hotel->city->name }}</p>

    @if ($booking && $booking->getHotelId() == $hotel->getId())
        <a href="{{ route('payment', ['booking_id' => $booking->getId()]) }}">Download Receipt Payment</a>
    @else
        <a href="{{ route('book', ['id' => $hotel->getId()]) }}">Book</a>
    @endif --}}

    <section class="d-flex mx-5 justify-content-center gap-5">

        <div class="card" style="width: 18rem;">
            <img src="{{ url($hotel->city->getImage()) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $hotel->city->getName() }}</h5>
                <p class="card-text">Indulge in the ultimate urban escape at our luxurious hotel nestled in the heart of the vibrant city, where you can immerse yourself in the local culture and experience the true essence of {{ $hotel->getName() }}.</p>
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="{{ route('list-cities') }}" class="card-link">Other Cities</a>
            </div>
        </div>
        
        <div>
            <div class="mb-3" style="max-width: 540px; text-decoration:none; color:black;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="d-flex">
                            <div class="card-body">
                                <h5 class="card-title">{{ $hotel->getName() }}</h5>
                                <p class="card-text">{{ $hotel->getDescription() }}.</p>
                                <p class="card-text"><small class="text-muted">{{ $hotel->getAddress() }}</small></p>
                            </div>
                            <div>
                                @if ($booking && $booking->getHotelId() == $hotel->getId())
                                    <a class="btn btn-primary" href="{{ route('payment', ['booking_id' => $booking->getId()]) }}">Download Receipt</a>
                                @else
                                    <a class="btn btn-primary" href="{{ route('book', ['id' => $hotel->getId()]) }}">Book</a>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <img src="{{ url($hotel->getImage()) }}" class="card-img" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
