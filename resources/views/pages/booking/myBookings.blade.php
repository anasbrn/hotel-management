@extends('layouts.layout')

@section('title', 'My Bookings')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Hotel Name</th>
                <th>City</th>
                <th>Room Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $booking->getCheckIndate() }}</td>
                <td>{{ $booking->getCheckOutdate() }}</td>
                <td>{{ $booking->hotel->getName() }}</td>
                <td>{{ $booking->hotel->city->getName() }}</td>
                <td>{{ $booking->room->getRoomNumber() }}</td>
                <td>
                    {{-- To add - if paid show downoload receipt payment --}}
                    <a href="">Pay Now</a>
                    {{-- end if --}}
                </td>
            </tr>
        </tbody>
    </table>
@endsection