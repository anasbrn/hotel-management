<?php

namespace App\Http\Controllers\Room;

use App\Services\RoomService;
use App\Services\HotelService;
use App\Http\Controllers\Controller;

class EditRoomController extends Controller
{
    protected $roomService;
    protected $hotelService;

    public function __construct(RoomService $roomService, HotelService $hotelService)
    {
        $this->roomService = $roomService;
        $this->hotelService = $hotelService;
    }

    public function __invoke($id)
    {
        $room = $this->roomService->find($id);
        $hotels = $this->hotelService->all();

        return view('pages.rooms.edit')
            ->with([
                'room' => $room,
                'hotels' => $hotels,
            ]);
    }
}