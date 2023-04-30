@extends('layouts.dashboard.layout')

@section('title', 'Dashboard - Hotels')

@section('content')
<section class="my-5 mx-5">
    <div class="text-end">
        <button class="btn btn-primary">
            Add Hotel
        </button>
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