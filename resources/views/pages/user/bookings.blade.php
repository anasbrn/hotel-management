@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Bookings')

@php
    use App\Models\Booking;
    $paid = Booking::STATUS_PAID;
    $not_paid = Booking::STATUS_NOT_PAID;
@endphp

@section('content')
<section class="my-5 mx-5">
    <div class="text-end">
        <button class="btn btn-primary">
            Add Room
        </button>
    </div>
    <div class="table-responsive">
        <table class="table gs-7 gy-7 gx-7">
            <thead>
                <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                    <th>Client Name</th>
                    <th>Check In Date</th>
                    <th>Check Out Date</th>
                    <th>Room Number</th>
                    <th>Hotel Name</th>
                    <th>Reference Number</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->getName() }}</td>
                    <td>{{ $booking->getCheckInDate() }}</td>
                    <td>{{ $booking->getCheckOutDate() }}</td>
                    <td>{{ $booking->room->getRoomNumber() }}</td>
                    <td>{{ $booking->hotel->getName() }}</td>
                    <td>{{ $booking->getReferenceNumber() }}</td>
                    @if ($booking->getStatus() == $paid)
                        <td class="badge badge-success">Paid</td>
                    @else
                        <td class="badge badge-danger">Not paid</td>
                    @endif
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection