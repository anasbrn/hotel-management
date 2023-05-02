<?php

namespace App\Services;

use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use App\Repositories\HotelRepository;

class HotelService
{
    private $hotelRepository;

    public function __construct(HotelRepository $hotelRepository)
    {
        $this->hotelRepository = $hotelRepository;
    }

    public function create(array $data)
    {
        $data[Hotel::USER_ID_COLUMN] = Auth::id();

        return $this->hotelRepository->create($data);
    }

    public function all()
    {
        return $this->hotelRepository->all();
    }

    public function find($id)
    {
        return $this->hotelRepository->find($id);
    }
}