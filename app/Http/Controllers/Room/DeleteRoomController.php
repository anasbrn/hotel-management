<?php

namespace App\Http\Controllers\Room;

use App\Services\RoomService;
use App\Http\Controllers\Controller;

class DeleteRoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService; 
    }

    public function __invoke($id)
    {
        $this->roomService->destroy($id);

        return redirect()
            ->back()
            ->with('Room has been deleted successfully');
    }
}