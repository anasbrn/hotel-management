<?php

namespace App\Http\Controllers\Room;

use App\Services\RoomService;
use App\Http\Controllers\Controller;

class ListBackOfficeRoomsController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function __invoke()
    {
        $rooms = $this->roomService->all();

        return view('pages.user.rooms')
            ->with([
                'rooms' => $rooms,
            ]);
    }
}