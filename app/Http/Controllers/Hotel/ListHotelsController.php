<?php

namespace App\Http\Controllers\Hotel;

use App\Services\HotelService;
use App\Http\Controllers\Controller;

class ListHotelsController extends Controller
{
    protected $hotelService;
    protected $bookingService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke()
    {
        $hotels = $this->hotelService->all();

        return view('pages.hotel.index')
            ->with([
                'hotels' => $hotels,
            ]);
    }
}