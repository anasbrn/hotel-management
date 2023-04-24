<?php

namespace App\Services;

use App\Repositories\HotelRepository;

class HotelService
{
    private $hotelRepository;

    public function __construct(HotelRepository $hotelRepository)
    {
        $this->hotelRepository = $hotelRepository;
    }
    public function all()
    {
        return $this->hotelRepository->all();
    }
}