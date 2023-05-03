@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Bookings')

@php
    use App\Models\Booking;
    $paid = Booking::STATUS_PAID;
    $not_paid = Booking::STATUS_NOT_PAID;
@endphp

@section('content')
<section class="my-5 mx-5">
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
                    @can('approve-bookings')
                        <th>Actions</th>
                    @endcan
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
                        <td class="">Paid</td>
                    @else
                        <td class="">Not paid</td>
                    @endif
                    @can('approve-bookings')
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <form action="{{ route('dashboard-bookings-delete', ['booking_id' => $booking->getId()]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="submit">Delete</button>
                                        </form>
                                    </li>
                                    @if($booking->getStatus() == $not_paid)
                                        <li>
                                            <form action="{{ route('dashboard-bookings-approve', ['booking_id' => $booking->getId()]) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button class="dropdown-item" type="submit">Approve</button>
                                            </form>
                                        </li>
                                        @endif
                                </ul>
                            </div>
                        </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection