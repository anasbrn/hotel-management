@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Rooms')

@section('content')
<section class="my-5 mx-5">
    <div class="text-end">
        <a href="{{ route('dashboard-rooms-create') }}" class="btn btn-primary">
            Add Room
        </a >
    </div>
    <div class="table-responsive">
        <table class="table gs-7 gy-7 gx-7">
            <thead>
                <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                    <th>Room Number</th>
                    <th>Hotel Name</th>
                    <th>Room Type</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->getRoomNumber() }}</td>
                    <td>{{ $room->hotel->getName() }}</td>
                    <td>{{ $room->getRoomType() }}</td>
                    <td>{{ $room->getPrice() }}</td>
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