<?php

namespace App\Repositories;

use App\Models\Booking;
use Illuminate\Support\Arr;


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

    public function update($id, $data)
    {
        $data = Arr::only(
            $data,
            [     
                Booking::STATUS_COLUMN,
            ]
        );
        
        Booking::query()
            ->where(Booking::ID_COLUMN, $id)
            ->update($data) > 0;
    }
}
