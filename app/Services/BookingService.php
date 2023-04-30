<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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
        $data['user_id'] = Auth::id();
        $data['reference_number'] = Str::random(6).time();
        
        return $this->bookingRepository->create($data);
    }

    public function find($id)
    {
        return $this->bookingRepository->find($id);
    }
}
