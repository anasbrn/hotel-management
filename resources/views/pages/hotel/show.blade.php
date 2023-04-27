@extends('layouts.layout')

@section('title')
    {{ $hotel->getName() }}
@endsection

@section('content')
    <p>{{ $hotel->getName() }}</p>
    <p>{{ $hotel->getDescription() }}</p>
    <p>{{ $hotel->city->name }}</p>



    {{-- <a href="{{ route('payment', ['booking_id' => $booking->id]) }}">Download receipt paiment</a>     --}}

    <a href="{{ route('book', ['id' => $hotel->getId()]) }}">Book</a>
@endsection