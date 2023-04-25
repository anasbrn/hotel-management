<?php

namespace App\Repositories;

use App\Models\Reservation;

class ReservationRepository
{
    public function all()
    {
        return Reservation::all();
    }

    public function create(array $data)
    {
        return Reservation::create($data);
    }

    public function find($id)
    {
        return Reservation::findOrFail($id);
    }
}
