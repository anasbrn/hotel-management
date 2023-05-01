<?php

namespace App\Repositories;

use App\Models\Room;

class RoomRepository
{
    public function create($data)
    {
        return Room::create($data);
    }

    public function all()
    {
        return Room::all();
    }

    public function find($id)
    {
        return Room::findOrFail($id);
    }
}
