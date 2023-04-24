<?php

namespace App\Repositories;

use App\Models\Hotel;

class HotelRepository
{
    public function all()
    {
        return Hotel::all();
    }

    public function find($id)
    {
        return Hotel::findOrFail($id);
    }
}