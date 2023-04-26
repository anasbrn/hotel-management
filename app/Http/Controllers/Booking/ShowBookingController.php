<?php

namespace App\Http\Controllers\Booking;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Services\HotelService;
use App\Http\Controllers\Controller;
use App\Services\BookingService;

class ShowBookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function __invoke($id)
    {
        $booking = $this->bookingService->find($id);
        
        return view('pages.hotel.show')
            ->with([
                'booking'=> $booking,
            ]);
    }
}
