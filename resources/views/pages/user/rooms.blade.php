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
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <form action="{{ route('dashboard-rooms-delete', ['room_id' => $room->getId()]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
                                </li>
                                <li>
                                    <a href="{{ route('dashboard-rooms-edit', ['room_id' => $room->getId()]) }}">Edit</a>
                                </li>
                            </ul>
                          </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection