<?php

namespace App\Http\Controllers\Booking;

use App\Services\HotelService;
use App\Http\Controllers\Controller;

class BookHotelController extends Controller
{

    public function __construct(private HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }

    public function __invoke($id)
    {
        $hotel = $this->hotelService->find($id);
        
        return view('pages.hotel.book')
            ->with([
                'hotel'=> $hotel,
            ]);   
    }
}
