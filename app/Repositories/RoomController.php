<?php

namespace App\Repositories;

use App\Models\Room;

class RoomRepository
{
    public function all()
    {
        return Room::all();
    }
}
