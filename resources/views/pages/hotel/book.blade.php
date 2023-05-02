@extends('layouts.hotel.layout')

@section('title')
    Book Hotel
@endsection

@php
    use Illuminate\Support\Facades\Auth;
@endphp

@section('content')
<section class="d-flex justify-content-center">
    <div class="mx-5 w-50">
        <h1 class="text-center">{{ $hotel->getName() }}</h1>
        <form action="{{ route('store-booking', $hotel->getId()) }}" method="POST   ">
            @csrf
            <div class="mb-3">    
                <label for="check_in_date">Check in date</label>
                <input  class="form-control" type="datetime-local" id="check_in_date" name="check_in_date">
            </div>

            <div class="mb-3">
                <label for="check_out_date">Check out date</label>
                <input class="form-control" type="datetime-local" id="check_out_date" name="check_out_date">
            </div>

            <input type="hidden" name="hotel_id" id="hotel_id" value="{{ $hotel->getId() }}">
            
            <div class="mb-3">
                <select class="form-control" name="room_id" id="room">
                    <option value="">Available rooms</option>
                    @foreach ($hotel->rooms as $room)
                        @if ($booking->getRoomId() == $room->id)
                            <option value="{{ $room->id }}" disabled>{{ $room->room_number }} - <span class="fw-bold text-danger">Booked</span></option>
                        @else
                            <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                        @endif
                    @endforeach
                </select>    
            </div>
            
            <div class="text-end">
                <button class="btn btn-primary" type="submit">Book now</button>
            </div>
        </form>
    </div>  
</section>

@endsection