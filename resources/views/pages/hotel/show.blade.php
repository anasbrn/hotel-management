@extends('layouts.layout')

@section('title')
    {{ $hotel->name }}
@endsection

@section('content')
    <p>{{ $hotel->name }}</p>
    <p>{{ $hotel->description }}</p>
    <p>{{ $hotel->city->name }}</p>



    {{-- <a href="{{ route('payment', ['booking_id' => $booking->id]) }}">Download receipt paiment</a>     --}}

    <a href="{{ route('book', ['id' => $hotel->id]) }}">Book</a>
@endsection