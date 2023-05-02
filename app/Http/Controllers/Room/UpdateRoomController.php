<?php

namespace App\Http\Controllers\Room;

use App\Models\Room;
use App\Services\RoomService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Room\RoomRequest;

class UpdateRoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function __invoke($id, RoomRequest $request)
    {
        $this->roomService->update($id, $request->all());

        $rooms = $this->roomService->all();


        return view('pages.user.rooms')
            ->with([
                'rooms' => $rooms,
            ]);
    }
}