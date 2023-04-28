@extends('layouts.layout')

@section('title')
    Book Hotel
@endsection

@php
    use Illuminate\Support\Facades\Auth;
@endphp

@section('content')
    <h1>{{ $hotel->getName() }}</h1>

    
    <form action="{{ route('store-booking', $hotel->getId()) }}">
        @csrf
        <label for="check_in_date">Check in date</label>
        <input type="datetime-local" id="check_in_date" name="check_in_date">
        
        <label for="check_out_date">Check out date</label>
        <input type="datetime-local" id="check_out_date" name="check_out_date">

        <input type="hidden" name="hotel_id" id="hotel_id" value="{{ $hotel->getId() }}">

        <select name="room_id" id="room">
            <option value="">Available rooms</option>
            @foreach ($hotel->rooms as $room)
            {{-- To add --}}
                {{-- @if ($room->id != $booking->getRoomId() || $booking->getUserId() != Auth::user()->id)
                    <option value="{{ $room->id }}" disabled>{{ $room->room_number }}</option>
                @else --}}
                <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                {{-- @endif --}}
            {{-- To add --}}
            @endforeach
        </select>    
        
        <button type="submit">Book now</button>
    </form>
@endsection