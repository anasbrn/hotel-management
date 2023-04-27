@extends('layouts.layout')

@section('title')
    Reserve Hotel
@endsection

@section('content')
    <h1>{{ $hotel->getName() }}</h1>

    <form action="{{ route('store-booking', $hotel->getId()) }}">
        @csrf
        <label for="check_in_date">Check in date</label>
        <input type="datetime-local" id="check_in_date" name="check_in_date">
        
        <label for="check_out_date">Check out date</label>
        <input type="datetime-local" id="check_out_date" name="check_out_date">
        
        <select name="room_type" id="room_type">
            <option value="">Double</option>
            <option value="">Single</option>
        </select>
        <button type="submit">Book now</button>
    </form>
@endsection