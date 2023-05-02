<?php

namespace App\Repositories;

use App\Models\Hotel;
use Illuminate\Support\Arr;


class HotelRepository
{
    public function create(array $data)
    {
        return Hotel::create($data);
    }

    public function all()
    {
        return Hotel::all();
    }

    public function find(int $id): ?Hotel
    {
        return Hotel::query()
            ->where(Hotel::ID_COLUMN, $id)
            ->with('city')
            ->get()
            ->first();
    }

    public function update($id, $data)
    {
        $data = Arr::only(
            $data,
            [     
                Hotel::NAME_COLUMN,
                Hotel::DESCRIPTION_COLUMN,
                Hotel::ADDRESS_COLUMN,
                Hotel::NUM_ROOMS_COLUMN,
                Hotel::CITY_ID_COLUMN,
            ]
        );
        Hotel::query()
            ->where(Hotel::ID_COLUMN, $id)
            ->update($data) > 0;
    }

    public function destroy($id)
    {
        return Hotel::destroy($id);
    }
}