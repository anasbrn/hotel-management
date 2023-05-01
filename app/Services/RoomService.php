<?php

namespace App\Services;

use App\Models\Room;
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

    public function update($id, $data)
    {
        return $this->roomRepository->update($id, $data);
    }

    public function destroy($id)
    {
        return $this->roomRepository->destroy($id);
    }
}