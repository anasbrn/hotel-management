<?php

namespace App\Repositories;

use App\Models\City;


class CityRepository
{
    public function all()
    {
        return City::all();
    }

    public function find($id)
    {
        return City::findOrFail($id);
    }
}
