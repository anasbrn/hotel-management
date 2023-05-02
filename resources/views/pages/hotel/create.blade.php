@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Rooms')

@php
    use App\Models\Hotel;
@endphp

@section('content')
    <section class="mx-5 my-5">
        <div>
            <form action="{{ route('dashboard-hotels-store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name">Hotel Name</label>
                    <input class="form-control" type="text" id="name" name="{{ Hotel::NAME_COLUMN }}">
                </div>
                <div class="mb-5">
                    <label for="description">Hotel Description</label>
                    <input class="form-control" type="text" id="description" name="{{ Hotel::DESCRIPTION_COLUMN }}">
                </div>
                <div class="mb-5">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" id="address" name="{{ Hotel::ADDRESS_COLUMN }}">
                </div>
                <div class="mb-5">
                    <label for="num_rooms">Number of Rooms</label>
                    <input class="form-control" type="number" id="num_rooms" name="{{ Hotel::NUM_ROOMS_COLUMN }}">
                </div>
                <div class="mb-5">
                    <label for="city_id">City</label>
                    <select class="form-control" name="{{ Hotel::CITY_ID_COLUMN }}" id="city_id">
                        <option>Select City</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->getId() }}">{{ $city->getName() }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </section>
@endsection