@extends('layouts.layout')

@section('title')
    {{ $hotel->getName() }}
@endsection

@section('content')
    <p>{{ $hotel->getName() }}</p>
    <p>{{ $hotel->getDescription() }}</p>
    <p>{{ $hotel->city->name }}</p>

    @if ($booking && $booking->getHotelId() == $hotel->getId())
        <a href="{{ route('payment', ['booking_id' => $booking->getId()]) }}">Download Receipt Payment</a>
    @else
        <a href="{{ route('book', ['id' => $hotel->getId()]) }}">Book</a>
    @endif
@endsection