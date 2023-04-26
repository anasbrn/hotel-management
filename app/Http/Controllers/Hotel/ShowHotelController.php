<?php

namespace App\Http\Controllers\Hotel;

use App\Services\HotelService;
use App\Services\BookingService;
use App\Http\Controllers\Controller;
use App\Models\Hotel;

class ShowHotelController extends Controller
{
    protected $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke($id)
    {
        $hotel = $this->hotelService->find($id);

        return view('pages.hotel.show')
            ->with([
                'hotel' => $hotel,
            ]);
    }
}