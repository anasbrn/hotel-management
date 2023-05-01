@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Rooms')

@php
    use App\Models\Room;
@endphp

@section('content')
    <section class="mx-5 my-5">
        <div>
            <form action="{{ route('dashboard-rooms-store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="room_number">Room Number</label>
                    <input class="form-control" type="text" id="room_number" name="{{ Room::ROOM_NUMBER_COLUMN }}">
                </div>
                <div class="mb-5">
                    <label for="hotel_id">Hotel Name</label>
                    <select name="{{ Room::HOTEL_ID_COLUMN }}" id="hotel_id">
                        <option>Select Hotel</option>
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->getId() }}">{{ $hotel->getName() }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="room_number">Room Number</label>
                    <input class="form-control" type="text" id="room_number" name="{{ Room::ROOM_NUMBER_COLUMN }}">
                </div>
                <div class="mb-5">
                    <label for="price">Price Per Night</label>
                    <input class="form-control" type="text" id="price" name="{{ Room::PRICE_PER_NIGHT_COLUMN }}">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </section>
@endsection