<?php

namespace App\Repositories;

use App\Models\Booking;


class BookingRepository
{
    public function all()
    {
        return Booking::all();
    }

    public function create(array $data)
    {
        return Booking::create($data);
    }

    public function find($id)
    {
        return Booking::findOrFail($id);
    }

    public function destroy($id)
    {
        return Booking::destroy($id);
    }
}
