<?php

namespace App\Http\Controllers\Hotel;

use App\Services\HotelService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Room\RoomRequest;

class UpdateHotelController extends Controller
{
    protected $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke($id, RoomRequest $request)
    {
        $this->hotelService->update($id, $request->all());

        return redirect()
            ->route('dashboard.user.hotels')
            ->with('Hotel has been updated successfully');
    }
}