<?php

namespace App\Http\Controllers\Room;

use App\Services\HotelService;
use App\Http\Controllers\Controller;

class CreateRoomController extends Controller
{
    protected $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke()
    {
        $hotels = $this->hotelService->all();

        return view('pages.rooms.create')
            ->with([
                'hotels' => $hotels,
            ]);
    }
}