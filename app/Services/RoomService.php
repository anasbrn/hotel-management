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

    public function create($data)
    {
        return $this->roomRepository->create($data);
    }

    public function all()
    {
        return $this->roomRepository->all();
    }

    public function find($id)
    {
        return $this->roomRepository->find($id);
    }
}