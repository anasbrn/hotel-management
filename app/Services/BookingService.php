<?php

namespace App\Services;

use App\Repositories\BookingRepository;


class BookingService
{
    private $bookingRepository;

    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function all()
    {
        return $this->bookingRepository->all();
    }

    public function create(array $data)
    {
        return $this->bookingRepository->create($data);
    }

    public function find($id)
    {
        return $this->bookingRepository->find($id);
    }
}