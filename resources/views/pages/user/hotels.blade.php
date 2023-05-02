@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Hotels')

@section('content')
<section class="my-5 mx-5">
    <div class="text-end">
        <a class="btn btn-primary" href="{{ route('dashboard-hotels-create') }}">
            Add Hotel
        </a>
    </div>
    <div class="table-responsive">
        <table class="table gs-7 gy-7 gx-7">
            <thead>
                <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                    <th>Name</th>
                    <th>Address</th>
                    <th>num_rooms</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->getName() }}</td>
                    <td>{{ $hotel->getAddress() }}</td>
                    <td>{{ $hotel->getNumRooms() }}</td>
                    <td>{{ $hotel->city->getName() }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <form action="{{ route('dashboard-hotels-delete', ['id' => $hotel->getId()]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
                                </li>
                                <li>
                                    <a href="{{ route('dashboard-hotels-edit', ['id' => $hotel->getId()]) }}">Edit</a>
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