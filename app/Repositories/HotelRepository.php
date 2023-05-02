<?php

namespace App\Repositories;

use App\Models\Hotel;


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
}