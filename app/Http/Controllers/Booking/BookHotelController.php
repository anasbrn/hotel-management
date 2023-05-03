<?php

namespace App\Http\Controllers\Booking;

use App\Services\HotelService;
use App\Services\BookingService;
use App\Http\Controllers\Controller;

class BookHotelController extends Controller
{

    public function __construct(private HotelService $hotelService, private BookingService $bookingService)
    {
        $this->hotelService = $hotelService;
        $this->bookingService = $bookingService;
    }

    public function __invoke($id)
    {
        $hotel = $this->hotelService->find($id);
        
        $bookings = $this->bookingService->all();            
        
        return view('pages.hotel.book')
            ->with([
                'hotel'=> $hotel,
                'bookings'=> $bookings,
            ]);   
    }
}
