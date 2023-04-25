<?php

namespace App\Services;

use App\Repositories\RoomRepository;

class RoomService
{
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function all()
    {
        return $this->roomRepository->all();
    }
}