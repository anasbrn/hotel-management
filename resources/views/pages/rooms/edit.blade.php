@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Rooms')

@php
    use App\Models\Room;
@endphp

@section('content')
    <section class="mx-5 my-5">
        <div>
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="room_number">Room Number</label>
                    <input class="form-control" type="text" id="room_number" name="{{ Room::ROOM_NUMBER_COLUMN }}" value="{{ $room->getRoomNumber() }}">
                </div>
                <div class="mb-5">
                    <label for="hotel_id">Hotel Name</label>
                    <select class="form-control" name="{{ Room::HOTEL_ID_COLUMN }}" id="hotel_id">
                        <option>Select Hotel</option>
                        @foreach ($hotels as $hotel)
                        @if ($hotel->getName() == $room->hotel->getName())
                        <option selected value="{{ $hotel->getId() }}">{{ $hotel->getName() }}</option>   
                        @else
                        <option value="{{ $hotel->getId() }}">{{ $hotel->getName() }}</option>   
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="room_type">Room Type</label>
                    <select class="form-control" type="text" id="room_type" name="{{ Room::ROOM_TYPE_COLUMN }}">
                        <option>Select room type</option>
                        @if($room->getRoomType() == 'Single')
                            <option selected value="Single">Single</option>
                            <option value="Double">Double</option>
                        @elseif ($room->getRoomType() == 'Double')
                            <option selected value="Double">Double</option>
                            <option value="Single">Single</option>
                        @else
                        @endif
                    </select>
                </div>
                <div class="mb-5">
                    <label for="price">Price Per Night</label>
                    <input class="form-control" type="text" id="price" name="{{ Room::PRICE_PER_NIGHT_COLUMN }}" value="{{ $room->getPrice() }}">
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
@endsection