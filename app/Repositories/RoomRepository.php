<?php

namespace App\Repositories;

use App\Models\Room;
use Illuminate\Support\Arr;

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

    public function update($id, $data)
    {
        $data = Arr::only(
            $data,
            [     
                Room::ROOM_NUMBER_COLUMN,
                Room::HOTEL_ID_COLUMN,
                Room::ROOM_TYPE_COLUMN,
                Room::PRICE_PER_NIGHT_COLUMN,
            ]
        );
        Room::query()
            ->where(Room::ID_COLUMN, $id)
            ->update($data) > 0;
    }

    public function destroy($id)
    {
        return Room::destroy($id);
    }
}
