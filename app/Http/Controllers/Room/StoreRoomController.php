<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Services\RoomService;
use App\Http\Controllers\Controller;

class StoreRoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function __invoke(Request $request)
    {
        $this->roomService->create($request->all());

        return redirect()
            ->back()
            ->with('Room has been added successfully');
    }
}
